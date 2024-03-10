<?php

//for php

$blogs = fetch('https://raw.githubusercontent.com/kmrafibinrabi/api/main/blogs');
foreach ($blogs as $blog) {
    echo "<div> " . $blog['title'] . "</div>";
}
//for reat.js
const blogs =  fetch('https://raw.githubusercontent.com/kmrafibinrabi/api/main/blogs');
blogs?.map(blog=>{
    return (
        <div>{blog.title}</div>
    )
})