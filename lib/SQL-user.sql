-- (A) USERS TABLE
CREATE TABLE `users` (
      `user_id` int(11) NOT NULL,
      `user_email` VARCHAR(255) NOT NULL,
      `user_name` VARCHAR(255) NOT NULL,
      `user_password` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8; -- InnoDB is a database storage engine

ALTER TABLE `users` -- The ALTER TABLE statement is used to add, delete, or modify columns in an existing table.
ADD PRIMARY KEY (`user_id`),
ADD UNIQUE KEY `user_email`(`user_email`),
ADD KEY `user_name` (`user_name`);

ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 1;

-- (B) DEFAULT USER
INSERT INTO `users` (`user_id`, `user_email`, `user_name`, `user_password`) VALUES
(1, 'john@doe.com', 'John Doe', '$2y$10$vZJy7y4uqQQTRN3zdi2RE.5ZJJzGEEPnzEjFXm4nEOx023XQ2Qe..');