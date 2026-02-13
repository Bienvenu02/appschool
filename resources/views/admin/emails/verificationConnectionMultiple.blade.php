@extends('admin.layouts.email_layout')

@section('content')
    @php
        // Intègre une image locale dans le mail
        $cid = $message->embed($imagePath);
    @endphp

    <div style="font-family: Arial, sans-serif; text-align: center; background-color: #f8f9fa; padding: 30px;">
        <div style="background-color: #ffffff; max-width: 600px; margin: 0 auto; border-radius: 10px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); padding: 20px;">
            <img src="{{ $cid }}" alt="logo" height="120" width="200" style="margin-bottom: 20px;">

            <h1 style="color: #333;">Code de vérification de l'adresse email</h1>

            <p style="font-size: 16px; color: #555;">
                Bonjour <strong>{{ $user->name }}</strong>,
            </p>

            <p style="font-size: 16px; color: #555;">
                Votre code de vérification est :
            </p>

            <h2 style="background-color: #007bff; color: #fff; display: inline-block; padding: 10px 20px; border-radius: 6px;">
                {{ $code }}
            </h2>

            <p style="font-size: 16px; color: #555; margin-top: 30px;">
                Merci d’utiliser l’application <strong>{{ APP_NAME }}</strong>.
            </p>

            <p style="color: #777; margin-top: 20px;">Cordialement,</p>
            <p style="font-weight: bold;">L’équipe {{ APP_NAME }}</p>

            <hr style="margin: 30px 0; border: none; border-top: 1px solid #ddd;">
            <p style="color: #999; font-size: 13px;">
                &copy; {{ date('Y') }} Tous droits réservés.
            </p>
        </div>
    </div>
@endsection
