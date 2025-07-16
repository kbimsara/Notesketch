# 📝 My Web Note App (with CKEditor 5)

This is a simple and clean web app that lets users register, log in, and create/edit rich text notes using **CKEditor 5 (Classic Build)**. Built with PHP and modular code structure, so it’s easy to tweak and maintain.

---

## 🚀 Features

- ✍️ Rich text editing with CKEditor 5
- 👤 User registration and login
- 🧱 Modular PHP files (easy to update stuff)
- 🎨 Custom styles and assets included

---

## 📁 Project Folder Structure (Simplified)

```
config.php
create-acc.php
index.php
login.php
pg/
├── footer.php
├── nav.php
src/
├── style.css
├── img/
│   ├── note.png
│   └── rocket.png
├── logo/
│   ├── note.png
│   ├── title icon.png
│   └── title icon2.png
user/
├── ajaxdata.php
├── edit-editor.php
├── editor.php
├── logout.php
├── sub-action.php
├── user-home.php
├── ckeditor5-build-classic/
│   ├── ckeditor.js
│   ├── ckeditor.js.map
│   ├── index.html
│   ├── LICENSE.md
│   └── (other CKEditor files)
├── pg/
│   ├── footer.php
│   └── nav.php
├── src/
│   ├── style.css
│   ├── img/
│   └── logo/
├── vendor/
│   └── autoload.php
```

---

## ⚙️ Getting Started

1. **Clone** this repo to your local machine.
2. If you’re using PHP packages, run `composer install` (optional).
3. Set up your **local web server** (Apache, XAMPP, etc.).
4. Open `config.php` and update your DB and app settings.
5. Run the app in your browser — and you're good to go!

---

## ✨ CKEditor 5

This app uses [CKEditor 5 Classic Build](https://github.com/ckeditor/ckeditor5-build-classic) to handle rich text editing.

> Want to see how it works? Check out  
> `user/ckeditor5-build-classic/index.html`

CKEditor 5 is under [GNU GPL v2 or later](https://ckeditor.com/legal/ckeditor-oss-license).  
Details in: `user/ckeditor5-build-classic/LICENSE.md`

---

## 📜 License

- App source: *[Add your license here]*
- CKEditor 5: [GNU GPL v2 or later](user/ckeditor5-build-classic/LICENSE.md)

---

## 🙌 Credits

- Big thanks to [CKEditor 5](https://ckeditor.com/ckeditor-5) by CKSource
- And other open-source tools used in this project

---

Feel free to explore the folders for more info or improvements. Have fun building! 💻🚀
