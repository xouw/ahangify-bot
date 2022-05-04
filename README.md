<h1 align= center><b>⭐️ Music Player ⭐️</b></h1>
<h3 align = center> A Telegram Music Bot written in Python using Pyrogram and Py-Tgcalls </h3>

<p align="center">
    <img src="https://img.shields.io/github/license/xouw/ahangify-bot?style=for-the-badge" alt="LICENSE">
    <img src="https://img.shields.io/github/contributors/xouw/ahangify-bot?style=for-the-badge" alt="Contributors">
    <img src="https://img.shields.io/github/repo-size/xouw/ahangify-bot?style=for-the-badge" alt="Repository Size"> <br>
    <img src="https://img.shields.io/github/forks/xouw/ahangify-bot?style=for-the-badge" alt="Forks">
    <img src="https://img.shields.io/github/stars/xouw/ahangify-bot?style=for-the-badge" alt="Stars">
    <img src="https://img.shields.io/github/watchers/xouw/ahangify-bot?style=for-the-badge" alt="Watchers">
    <img src="https://img.shields.io/github/commit-activity/w/xouw/ahangify-bot?style=for-the-badge" alt="Commit Activity">
    <img src="https://img.shields.io/github/issues/xouw/ahangify-bot?style=for-the-badge" alt="Issues">
</p>




**Configuration:**
---------

1. Open the `index.php` file and paste the bot token:
```php
const API_KEY = 'TOKEN';
```
2. Login to [Ahangify](https://ahangify/login) and create an account
3. Open the `login.php` and Enter your username and password:
```php
$login = json_encode(['username' => 'UserName', 'password' => 'Password']);
  ```
  
  - We recommend that you use the model and name of your device for the **USER AGENT**
  ```php
  user-agent:Ahangify Mobile/1.7.3 (Samsung SM-A217F, Android 11 "30")
  ```

4. Now open the `login.php` in your browser

* if the `• Login was successful: 45765*****` is displayed, it means that an **CSRF token** has been created


5. Set the webhook to `index.php`
