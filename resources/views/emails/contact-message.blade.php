<!DOCTYPE html>
<html lang="de">
    <body style="font-family: Arial, sans-serif; color: #1f2937;">
        <h2>Neue Kontaktanfrage</h2>
        <p><strong>Vorname:</strong> {{ $messageModel->first_name }}</p>
        <p><strong>Nachname:</strong> {{ $messageModel->last_name }}</p>
        <p><strong>E-Mail:</strong> {{ $messageModel->email }}</p>
        @if ($messageModel->phone)
            <p><strong>Telefon:</strong> {{ $messageModel->phone }}</p>
        @endif
        <p><strong>Betreff:</strong> {{ $messageModel->subject }}</p>
        <hr>
        <p><strong>Nachricht:</strong></p>
        <p>{{ $messageModel->message }}</p>
    </body>
</html>
