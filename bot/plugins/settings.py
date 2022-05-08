import os
from dotenv import load_dotenv

load_dotenv()

LOGS_FILE_DIR = "logs/logs.log"

API = os.getenv("TELEGRAM_BOT_API")
SUPERUSER = os.getenv("TELEGRAM_SUPERUSER")