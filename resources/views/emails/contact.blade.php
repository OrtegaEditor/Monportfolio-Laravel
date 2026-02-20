<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <h2>Nouveau message depuis le portfolio</h2>

    <p><strong>Nom :</strong> {{ $contact->name }}</p>
    <p><strong>Email :</strong> {{ $contact->email }}</p>
    <p><strong>Sujet :</strong> {{ $contact->subject ?? 'Aucun' }}</p>
    <p><strong>Message :</strong></p>
    <p>{{ $contact->message }}</p>


</body>
</html>
