import os
termuxx = "false"
try:
    from src.termux_ver import *
except Exception:
    termuxx = "real"
    pass
class bcolors:
    HEADER    = '\033[95m'
    OKBLUE    = '\033[34m'
    OKGREEN   = '\033[92m'
    WARNING   = '\033[93m'
    FAIL      = '\033[91m'
    BOLD      = '\033[1m'
    UNDERLINE = '\033[4m'
    ENDC      = '\033[0m'
    GREY      = '\033[90m'
    BG_RED    = '\033[41m'

def clear():
    os.system("clear")
square_version = (bcolors.FAIL+"["+bcolors.ENDC+"v0.1.0"+bcolors.FAIL+"]"+bcolors.ENDC)
square_tild = (bcolors.FAIL+"["+bcolors.ENDC+"∼"+bcolors.FAIL+"]"+bcolors.ENDC)
square_1 = (bcolors.FAIL+"["+bcolors.ENDC+"1"+bcolors.FAIL+"]"+bcolors.WARNING+" Facebook"+bcolors.ENDC)
square_2 = (bcolors.FAIL+"["+bcolors.ENDC+"2"+bcolors.FAIL+"]"+bcolors.WARNING+" Instagram"+bcolors.ENDC)
square_3 = (bcolors.FAIL+"["+bcolors.ENDC+"3"+bcolors.FAIL+"]"+bcolors.WARNING+" Paypal"+bcolors.ENDC)
square_4 = (bcolors.FAIL+"["+bcolors.ENDC+"4"+bcolors.FAIL+"]"+bcolors.WARNING+" Twitter"+bcolors.ENDC)
square_5 = (bcolors.FAIL+"["+bcolors.ENDC+"5"+bcolors.FAIL+"]"+bcolors.WARNING+" Netflix"+bcolors.ENDC)
square_6 = (bcolors.FAIL+"["+bcolors.ENDC+"6"+bcolors.FAIL+"]"+bcolors.WARNING+" Twitch"+bcolors.ENDC)
square_7 = (bcolors.FAIL+"["+bcolors.ENDC+"7"+bcolors.FAIL+"]"+bcolors.WARNING+" Github"+bcolors.ENDC)
square_8 = (bcolors.FAIL+"["+bcolors.ENDC+"8"+bcolors.FAIL+"]"+bcolors.WARNING+" Spotify"+bcolors.ENDC)
square_9 = (bcolors.FAIL+"["+bcolors.ENDC+"9"+bcolors.FAIL+"]"+bcolors.WARNING+" Pinterest"+bcolors.ENDC)
square_10 = (bcolors.FAIL+"["+bcolors.ENDC+"10"+bcolors.FAIL+"]"+bcolors.WARNING+" Linkedin"+bcolors.ENDC)

choice = '''
'''+bcolors.OKGREEN+'''〈'''+bcolors.OKBLUE+'''Select Any website for your victim '''+bcolors.OKGREEN+'''〉

'''+square_1+'''
'''+square_2+'''
'''+square_3+'''
'''+square_4+'''
'''+square_5+'''
'''+square_6+'''
'''+square_7+'''
'''+square_8+'''
'''+square_9+'''
'''+square_10+'''

'''

square_1_host = (bcolors.FAIL+"["+bcolors.ENDC+"1"+bcolors.FAIL+"]"+bcolors.WARNING+" Ngrok"+bcolors.ENDC)
square_2_host = (bcolors.FAIL+"["+bcolors.ENDC+"2"+bcolors.FAIL+"]"+bcolors.WARNING+" Localtunnel"+bcolors.ENDC)
square_3_host = (bcolors.FAIL+"["+bcolors.ENDC+"3"+bcolors.FAIL+"]"+bcolors.WARNING+" LocalHost.run"+bcolors.ENDC)
if termuxx != "real":
    square_3_host = (bcolors.FAIL+"["+bcolors.ENDC+"3"+bcolors.FAIL+"]"+bcolors.WARNING+" LocalHost.run"+bcolors.ENDC)

    choice2 = '''
'''+bcolors.OKGREEN+'''〈'''+bcolors.OKBLUE+'''choose host service '''+bcolors.OKGREEN+'''〉

'''+square_3_host+bcolors.WARNING+''' only one compatible with termux'''+bcolors.ENDC+'''
'''
else:
    choice2 = '''
'''+bcolors.OKGREEN+'''〈'''+bcolors.OKBLUE+'''choose host service '''+bcolors.OKGREEN+'''〉

'''+square_1_host+bcolors.WARNING+''' not working'''+bcolors.ENDC+'''
'''+square_2_host+bcolors.WARNING+''' not working
'''+square_3_host+bcolors.WARNING+''' '''+bcolors.ENDC+'''
'''
def banner():
    print(bcolors.WARNING+'''┏┓┏┓┏┳┓┳┳┏┓
┗┓┣  ┃ ┃┃┃┃
┗┛┗┛ ┻ ┗┛┣┛

'''+square_version+bcolors.OKGREEN+''' ╍'''+bcolors.OKBLUE+''' Phishing tool by github.com/SamueleAmato '''+bcolors.OKGREEN+'''╍

'''+bcolors.ENDC+bcolors.BG_RED+''':: Developers assumes no liability and are not ::'''+bcolors.ENDC+'''
''')
