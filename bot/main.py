from plugins.settings import API, SUPERUSER

from telegram import *
from telegram.ext import *


def main():
    updater = Updater(API)

    dispatcher = updater.dispatcher

    updater.start_polling()
    updater.idle()

if __name__ == "__main__":
    main()