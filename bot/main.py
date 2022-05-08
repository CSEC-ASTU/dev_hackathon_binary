import logging

from plugins.settings import API, SUPERUSER, LOGS_FILE_DIR

from telegram import *
from telegram.ext import *

logging.basicConfig(format='%(asctime)s - %(name)s - %(levelname)s - %(message)s',level=logging.INFO,filename=LOGS_FILE_DIR)
logger = logging.getLogger(__name__)


def main():
    updater = Updater(API)

    dispatcher = updater.dispatcher

    updater.start_polling()
    updater.idle()

if __name__ == "__main__":
    main()