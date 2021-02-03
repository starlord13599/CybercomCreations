<?php
// phpcs:disable
echo ("<p>name is $name</p>");
echo ("<p>email address is $email</p>");
echo ("<p>class time at $course</p>");
echo ("<p>class info $class </p>");
echo ("<p>gender is $gender</p>");

if (empty($subject)) {
    echo ' ';
} else {
    for ($i = 0; $i < count($subject); $i++) {
        echo ($subject[$i] . " ");
    }
}
