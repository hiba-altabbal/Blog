create database blog_db 

create table posts(id INT AUTO_INCREMENT PRIMARY KEY,
                   title VARCHAR(255) NOT NULL,
				   content TEXT NOT NULL,
				   author VARCHAR(100) NOT NULL ,
				   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
				   updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);