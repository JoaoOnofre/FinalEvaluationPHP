
----------------------------------------------------------
--     Users           |           Articles             --
-----------------------|----------------------------------
--                     |                                --
--     ● id            |           ● id                 --
--     ● firstname     |           ● title              --
--     ● lastname      |           ● content            --
--     ● email         |           ● picture            --
--     ● role          |           ● date_publish       --
--                     |           ● id_user            --
----------------------------------------------------------

-- SQL query to display an article (id = 10) and its author using a Join.


SELECT users.firstname as "Firstname of the Author", users.lastname as "Lastname of the Author", articles.*
FROM users
LEFT JOIN articles 
ON users.id = articles.id_user 
where articles.id = 10




