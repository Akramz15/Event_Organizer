@extends('layouts.main')

@section('content')
<div class="login-bg-custom">
    <div class="login-abstract">
        <svg width="100%" height="100%" viewBox="0 0 1440 900" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 800 Q 400 700 800 900 T 1440 800" stroke="#fff" stroke-opacity="0.08" stroke-width="18" fill="none"/>
            <circle cx="1200" cy="200" r="90" fill="#fff" fill-opacity="0.04"/>
            <rect x="200" y="100" width="120" height="120" rx="40" fill="#fff" fill-opacity="0.04"/>
            <rect x="900" y="600" width="180" height="60" rx="30" fill="#fff" fill-opacity="0.04"/>
        </svg>
    </div>
    <div class="login-container-custom">
        <div class="login-card-custom">
            <div class="login-welcome">
                <div class="logo-box">
                    <div class="logo-icon"><span class="logo-dot"></span></div>
                    <span class="logo-text">ASM Event Organizer</span>
                </div>
                <h1>Welcome!</h1>
                <div class="divider"></div>
                <p>Login admin untuk mengelola event, jika anda bukan admin silahkan klik tombol dibawah ini.</p>
                <a href="/" class="learn-btn">Kembali ke Beranda</a>
            </div>
            <div class="login-form-side">
                <form method="POST" action="{{ route('admin.login') }}" class="login-form-box">
                    @csrf
                    <h2>Sign in</h2>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required autofocus>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <button type="submit" class="submit-btn">Submit</button>
                    @if(session('error'))
                        <div class="login-error">{{ session('error') }}</div>
                    @endif
                    <div class="socials">
                        <a href="#"><i class="ion-social-facebook"></i></a>
                        <a href="#"><i class="ion-social-instagram"></i></a>
                        <a href="#"><i class="ion-social-pinterest"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
body {
    background: #2d0b3a !important;
    background: linear-gradient(135deg, #2d0b3a 0%, #3a185a 100%) !important;
    min-height: 100vh;
    font-family: 'Poppins', 'Roboto', Arial, Helvetica, sans-serif;
}
.login-bg-custom {
    min-height: 100vh;
    width: 100vw;
    position: fixed;
    inset: 0;
    z-index: 0;
    background: url('/images/BGlogin.jpg') center center/cover no-repeat #111;
    overflow: hidden;
}
.login-abstract {
    position: fixed;
    inset: 0;
    z-index: 1;
    pointer-events: none;
}
.login-abstract svg {
    width: 100vw;
    height: 100vh;
    display: block;
}
.login-container-custom {
    position: relative;
    z-index: 2;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.login-card-custom {
    display: flex;
    flex-direction: row;
    background: rgba(14, 13, 15, 0.82);
    border-radius: 1.5rem;
    box-shadow: 0 8px 40px rgba(79, 74, 81, 0.18);
    overflow: hidden;
    max-width: 900px;
    width: 95vw;
    min-height: 420px;
    backdrop-filter: blur(8px);
}
.login-welcome {
    flex: 1 1 0;
    padding: 3rem 2.5rem 3rem 2.5rem;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: transparent;
    min-width: 320px;
}
.logo-box {
    display: flex;
    align-items: center;
    gap: 0.7rem;
    margin-bottom: 2.2rem;
}
.logo-icon {
    width: 2.2rem;
    height: 2.2rem;
    background: #fff2;
    border-radius: 0.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
}
.logo-dot {
    display: block;
    width: 1.1rem;
    height: 1.1rem;
    background: #fff;
    border-radius: 0.2rem;
}
.logo-text {
    font-size: 1.2rem;
    font-weight: 700;
    letter-spacing: 1px;
    opacity: 0.7;
}
.login-welcome h1 {
    font-size: 3rem;
    font-weight: 900;
    margin: 0 0 1.2rem 0;
    letter-spacing: 1px;
    line-height: 1.1;
}
.divider {
    width: 2.5rem;
    height: 0.18rem;
    background: #fff3;
    border-radius: 1rem;
    margin-bottom: 1.2rem;
}
.login-welcome p {
    font-size: 1.08rem;
    color:rgb(255, 255, 255);
    margin-bottom: 2.2rem;
    line-height: 1.6;
    max-width: 340px;
}
.learn-btn {
    background:rgb(62, 147, 186);
    color: #fff;
    border: none;
    border-radius: 2rem;
    padding: 0.7rem 2.2rem;
    font-size: 1.08rem;
    font-weight: 600;
    letter-spacing: 0.5px;
    box-shadow: 0 2px 12px rgba(41,182,246,0.13);
    cursor: pointer;
    transition: background 0.2s, transform 0.15s;
    text-decoration: none;
    display: inline-block;
    text-align: center;
}
.learn-btn:hover {
    background:rgb(81, 131, 180);
    color: #fff !important;
    transform: translateY(-2px) scale(1.04);
}
.login-form-side {
    flex: 1 1 0;
    background: rgba(255,255,255,0.04);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 3rem 2.5rem;
    position: relative;
    min-width: 320px;
}
.login-form-box {
    width: 100%;
    max-width: 340px;
    background: rgba(255,255,255,0.13);
    border-radius: 1.2rem;
    box-shadow: 0 2px 12px rgba(255,255,255,0.04);
    padding: 2.2rem 2rem 1.5rem 2rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    backdrop-filter: blur(8px);
}
.login-form-box h2 {
    color: #fff;
    font-size: 2rem;
    font-weight: 800;
    margin-bottom: 2.2rem;
    letter-spacing: 1px;
}
.login-form-box label {
    color:rgb(255, 255, 255);
    font-size: 1.01rem;
    font-weight: 500;
    margin-bottom: 0.3rem;
    align-self: flex-start;
}
.login-form-box input[type="email"],
.login-form-box input[type="password"] {
    width: 100%;
    padding: 0.7rem 1rem;
    border-radius: 1.2rem;
    border: none;
    background: rgba(255,255,255,0.18);
    color: #fff;
    font-size: 1.08rem;
    margin-bottom: 1.2rem;
    outline: none;
    box-shadow: 0 1px 4px rgba(60,0,80,0.08);
}
.login-form-box input[type="email"]::placeholder,
.login-form-box input[type="password"]::placeholder {
    color:rgb(255, 255, 255);
}
.submit-btn {
    width: 100%;
    background: rgb(62, 147, 186);
    color: #fff;
    border: none;
    border-radius: 2rem;
    padding: 0.7rem 0;
    font-size: 1.08rem;
    font-weight: 600;
    letter-spacing: 0.5px;
    box-shadow: 0 2px 12px rgba(85,99,113,0.13);
    cursor: pointer;
    margin-top: 0.7rem;
    margin-bottom: 1.5rem;
    transition: background 0.2s, transform 0.15s;
}
.submit-btn:hover {
    background: rgb(81, 131, 180);
    transform: translateY(-2px) scale(1.04);
}
.login-error {
    margin-top: 1rem;
    color: #d9534f;
    text-align: center;
    font-size: 0.98rem;
}
.socials {
    display: flex;
    flex-direction: row;
    gap: 1.2rem;
    justify-content: center;
    margin-top: 0.5rem;
}
.socials a {
    color: #fff;
    font-size: 1.4rem;
    opacity: 0.7;
    transition: color 0.18s, opacity 0.18s, transform 0.18s;
}
.socials a:hover {
    color: #ff6a88;
    opacity: 1;
    transform: scale(1.13);
}
@media (max-width: 900px) {
    .login-card-custom {
        flex-direction: column;
        min-height: 0;
    }
    .login-welcome, .login-form-side {
        padding: 2.2rem 1.2rem;
    }
}
@media (max-width: 600px) {
    .login-card-custom {
        max-width: 99vw;
    }
    .login-form-box {
        padding: 1.2rem 0.7rem 1.2rem 0.7rem;
    }
}
</style>
@endpush

