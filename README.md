## __Introduction: Simple Website built in the format of MVC  and written using PHP__
---
###__Prerequisites:__
- Install at least 1 combo of environment packages such as: XAMPP, LAMPP. Here I used LAMP (Linux + Apache + Mysql + PHP)

- Install phpmyadmin in order to control the DB via web browser


###__1. Admin__:
- Add a new item: http://localhost/mvc_nongdan/index.php?controller=admin&action=add

- Edit an item: http://localhost/mvc_nongdan/index.php?controller=admin&action=edit&id=12

- Delete an item: http://localhost/mvc_nongdan/index.php?controller=client&action=delete&id=12

- List all items: http://localhost/mvc_nongdan/index.php?controller=admin&action=show

- View an item in detail: http://localhost/mvc_nongdan/index.php?controller=client&action=detail&id=12

###__2. Client:__
- List all items: http://localhost/mvc_nongdan/index.php?controller=client&action=show

- View an item in detail: http://localhost/mvc_nongdan/index.php?controller=client&action=detail&id=12

###__3. Database__
- When you wanna run your own DB, feel free to create a new one.
- Otherwise, I exported my dummy DB in folder ./database, so you just import it.

---
### __P/S:__
This is my 1st php project, written in 3 days after I have started learning how to write PHP code from scratch, so it might contain a bunch of silly things. 

If you find something that I could do better, feel free to leave your comments so I could improve my coding skills. Thank you.
