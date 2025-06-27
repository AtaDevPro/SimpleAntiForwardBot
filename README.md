# SimpleAntiForwardBot

🔄 A simple Telegram bot built with PHP that recreates forwarded messages using the `copyMessage` method of the Telegram Bot API.

---

## 🔧 What it does

This bot automatically **copies** every message it receives (text, forwarded, etc.) and **re-sends it** using the `copyMessage` method.  
This way, the message looks like it was sent by the bot itself, not by the original sender.

Useful when:
- You want to hide the original source of a forwarded message.
- You want forwarded messages to appear like native bot responses.
- You want to understand how Telegram handles `copyMessage` via bot API.

---

## 📂 Files

- `index.php` → Main bot logic
- No external dependencies required

---

## 🚀 Setup Instructions

1. Create a bot via [@BotFather](https://t.me/BotFather) and copy your token.
2. Upload the bot to your PHP server.
3. Replace your token in the code:

```php
define("API_TOKEN", "YOUR_BOT_TOKEN_HERE");
```

## 📎 Author

Developed by [AtaDevPro](https://github.com/AtaDevPro)

