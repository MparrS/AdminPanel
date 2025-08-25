# 📊 PHP Admin Panel

This project is a **PHP-based web application** . The application includes various features such as **user alerts**, **data tables**, **a dynamic navigation menu**, and a **customizable admin panel with a banner** 🏆🎯.  

![Banner](./src/images/banner.png)  

---

## ⚙️ Installation 🏗️  

To run this project locally, follow these steps:  

1️⃣ **Clone the repository** 📂:  
   ```bash
   git clone https://github.com/iqbolshoh/php-admin-panel.git
   ```  
2️⃣ **Navigate to the project directory** 📁:  
   ```bash
   cd php-admin-panel
   ```  
3️⃣ **Set up a local server** 🌍 (e.g., **XAMPP, WAMP, MAMP**) and place the project files in the server's root directory **(htdocs/www)**.  

---

## 🚀 Usage 🎯  

To use the application, open your **browser** 🌐 and navigate to:  

🔗 `http://localhost/php-admin-panel`  

This will load the **main page** of the application. 🎉  

---

## 📌 Adding Sidebar Menu Items 🏗️  

The **`$menuItems`** array defines the **sidebar menu** 📜. Each item includes:  

✅ **`menuTitle`** – The section name 🏷️ (e.g., `"Menu"`).  
✅ **`icon`** – The section icon 🎨 (e.g., `"fas fa-home"`).  
✅ **`pages`** – Subpages with `"title"` (name) and `"url"` (link) 🔗.  

### 📝 Example: Adding/Updating Menu Items  

```php
$menuItems = [
    [
        "menuTitle" => "Dashboard",
        "icon" => "fas fa-tachometer-alt",
        "pages" => [
            ["title" => "Home", "url" => "index.php"]
        ],
    ],
    [
        "menuTitle" => "Settings",
        "icon" => "fas fa-cog",
        "pages" => [
            ["title" => "Profile", "url" => "profile.php"]
        ],
    ]
];
```


## 🖥 Technologies Used
![HTML](https://img.shields.io/badge/HTML-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-%23F7DF1C.svg?style=for-the-badge&logo=javascript&logoColor=black)
![jQuery](https://img.shields.io/badge/jQuery-%230e76a8.svg?style=for-the-badge&logo=jquery&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)

## 📜 License
This project is open-source and available under the **MIT License**.
