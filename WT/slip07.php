movie.xml file :-
<?xml version="1.0" encoding="UTF-8"?>
<Movie>
       <MovieInfo>
                 <MovieNo>1</MovieNo>
                 <MovieTitle>Singham</MovieTitle>
                 <ActorName>Ajay</ActorName>
                 <ReleaseYear>2010</ReleaseYear>
       </MovieInfo>
       <MovieInfo>
                 <MovieNo>2</MovieNo>
                 <MovieTitle>Dangal</MovieTitle>
                 <ActorName>Amir</ActorName>
                 <ReleaseYear>2014</ReleaseYear>
       </MovieInfo>
       <MovieInfo>
                 <MovieNo>3</MovieNo>
                 <MovieTitle>Golmal</MovieTitle>
                 <ActorName>Sharman</ActorName>
                 <ReleaseYear>2010</ReleaseYear>
       </MovieInfo>
       <MovieInfo>
                 <MovieNo>4</MovieNo>
                 <MovieTitle>HeroPanti</MovieTitle>
                 <ActorName>Akshay</ActorName>
                 <ReleaseYear>2015</ReleaseYear>
       </MovieInfo>
       <MovieInfo>
                 <MovieNo>5</MovieNo>
                 <MovieTitle>Bhootnath</MovieTitle>
                 <ActorName>Abhishek</ActorName>
                 <ReleaseYear>2007</ReleaseYear>
       </MovieInfo>
</Movie>

movie.php
<?php
$dom = new DomDocument();
$dom->load("movie.xml");
echo "<h2>Name of the Movies</h2>";
$Mname=$dom->getElementsByTagName("MovieTitle");

foreach ($Mname as $m)
{
        echo "<b>$m->textContent<b><br><br>";
}
?>