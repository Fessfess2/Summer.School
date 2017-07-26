SELECT DISTINCT users.game
FROM users
JOIN payments ON users.id = payments.user_id AND payments.amoumt > 100
WHERE users.level > 10 