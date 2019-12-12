<!doctype html>
<?php
//but first some general exercises to understand OOB better also because i find cardgames boring & i know zip about black jack

///set properties & methods

class User{
    //properties
    public $userName = 'Cath';
    public $userMail = 'catherinedm82@gmail.com';
}

    //objects
    $userOne = new User();
    $userTwo = new User();
 //to access the value of the property
    echo 'the class is'. get_class($userTwo);
    echo "<br/>\n";

    ?>





<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/> -->
    <title>OOP Blackjack </title>
</head>

<body>
<!-- Public Class Card

Public Const Jack As Integer = 10
Public Const Queen As Integer = 11
Public Const King As Integer = 12
Public Const Ace As Integer = 13 ' You might also choose 1. Toughie.

Public Property Value As Integer
Public Property Suit As Suit
End Class

Public Enum Suit
Hearts,
Diamonds,
Clubs,
Spades
End Class 
Dim deck As New List(Of Card)()

For Each cardSuit In { Suit.Hearts, Suit.Diamonds, Suit.Clubs, Suit.Spades }
    For cardValue As Integer = 2 To 13
        deck.Add(New Card() With { .Value = cardValue, .Suit = cardSuit })
    Next
Next
Dim hearts() As Image = { My.Resources.Two_Of_Hearts, My.Resources.Three_Of_Hearts, ..., My.Resources.Ace_Of_Hearts }
-->

</body>
</html>