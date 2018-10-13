<!DOCTYPE html>

<html>
<head>
    <title>
    </title>
</head>
<body>

<h1>Projects</h1>
<p>
    @foreach($projects as $project)
        <li>{{$project->title}}</li>

    @endforeach

</p>
<ul>
    <li><a href="/">Home</a></li>

    <li><a href="/contact">Contact</a></li>
    <li><a href="/about">About</a></li>
</ul>
</body>

</html>