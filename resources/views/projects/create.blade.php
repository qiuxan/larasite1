<!DOCTYPE html>

<html>
<head>
    <title>
    </title>
</head>
<body>

<h1>Create a new project(test)</h1>

<form action="/projects" method="post">

    {{csrf_field()}}
    <div>
        <input type="text" name="title" placeholder="Project Title">
    </div>

    <div>
        <textarea name="description" placeholder="Project Description"></textarea>
    </div>
    <div>
        <button type="submit">Create Project</button>
    </div>
</form>

    <ul>
        <li><a href="/">Home</a></li>

        <li><a href="/contact">Contact</a></li>
        <li><a href="/about">About</a></li>
    </ul>
</body>

</html>