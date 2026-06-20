        
        
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Register|Login</title>
            <style>
                /* -------------------- CSS Reset & Base -------------------- */
                *,
                *::before,
                *::after {
                    box-sizing: border-box;
                    margin: 0;
                    padding: 0;
                }

                body {
                    font-family: system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
                    background: #f4f6f9;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 100vh;
                    padding: 1.25rem;
                    color: #2d3748;
                }

                /* -------------------- Form Container -------------------- */
                form {
                    background: #ffffff;
                    border-radius: 1rem;
                    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08),
                                0 8px 10px -6px rgba(0, 0, 0, 0.02);
                    padding: clamp(1.5rem, 5vw, 2.5rem);
                    width: 100%;
                    max-width: 460px;
                    transition: all 0.2s ease;
                }

                h1 {
                    font-size: clamp(1.6rem, 5vw, 2rem);
                    font-weight: 700;
                    text-align: center;
                    margin-bottom: 1.75rem;
                    color: #1a202c;
                    letter-spacing: -0.025em;
                }

                /* -------------------- Form Groups -------------------- */
                p {
                    margin-bottom: 1.25rem;
                }

                label {
                    display: block;
                    font-size: 0.9rem;
                    font-weight: 600;
                    margin-bottom: 0.4rem;
                    color: #4a5568;
                    letter-spacing: 0.025em;
                }

                input[type="text"],
                input[type="email"],
                input[type="password"] {
                    width: 100%;
                    padding: 0.75rem 0.9rem;
                    font-size: 1rem;
                    border: 1px solid #e2e8f0;
                    border-radius: 0.5rem;
                    background: #f8fafc;
                    transition: border-color 0.15s ease, box-shadow 0.15s ease, background 0.15s ease;
                    outline: none;
                    color: #1a202c;
                }

                input:focus {
                    border-color: #5a67d8;
                    box-shadow: 0 0 0 3px rgba(90, 103, 216, 0.2);
                    background: #ffffff;
                }

                /* -------------------- Submit Button -------------------- */
                button[type="submit"] {
                    width: 100%;
                    padding: 0.8rem 1rem;
                    font-size: 1rem;
                    font-weight: 600;
                    letter-spacing: 0.02em;
                    color: #ffffff;
                    background: #4f46e5;
                    border: none;
                    border-radius: 0.6rem;
                    cursor: pointer;
                    transition: background 0.2s ease, transform 0.1s ease, box-shadow 0.2s ease;
                    margin-top: 0.5rem;
                    box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.2),
                                0 2px 4px -2px rgba(79, 70, 229, 0.15);
                }

                button[type="submit"]:hover {
                    background: #4338ca;
                    box-shadow: 0 10px 15px -3px rgba(79, 70, 229, 0.25),
                                0 4px 6px -4px rgba(79, 70, 229, 0.2);
                }

                button[type="submit"]:active {
                    transform: scale(0.98);
                    background: #3730a3;
                    box-shadow: 0 2px 4px -1px rgba(79, 70, 229, 0.15);
                }

                /* -------------------- Divider -------------------- */
                .divider {
                    display: flex;
                    align-items: center;
                    text-align: center;
                    margin: 1.5rem 0 1.25rem;
                    color: #a0aec0;
                    font-size: 0.85rem;
                }

                .divider::before,
                .divider::after {
                    content: '';
                    flex: 1;
                    border-bottom: 1px solid #e2e8f0;
                }

                .divider:not(:empty)::before {
                    margin-right: .75em;
                }

                .divider:not(:empty)::after {
                    margin-left: .75em;
                }

                /* -------------------- Google Button -------------------- */
                .google-btn {
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    width: 100%;
                    padding: 0.75rem 1rem;
                    background-color: #ffffff;
                    border: 1px solid #e2e8f0;
                    border-radius: 0.6rem;
                    font-size: 1rem;
                    font-weight: 500;
                    color: #4a5568;
                    text-decoration: none;
                    transition: background-color 0.2s, box-shadow 0.2s;
                    margin-top: 0.25rem;
                }

                .google-btn:hover {
                    background-color: #f7fafc;
                    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
                }

                .google-btn:active {
                    background-color: #edf2f7;
                }

                .google-btn svg {
                    width: 1.25rem;
                    height: 1.25rem;
                    margin-right: 0.75rem;
                }

                /* -------------------- Responsive Adjustments -------------------- */
                @media (max-width: 480px) {
                    body {
                        padding: 1rem;
                        align-items: flex-start;
                        padding-top: 2rem;
                    }

                    form {
                        padding: 1.5rem 1.25rem;
                        border-radius: 0.85rem;
                    }

                    button[type="submit"],
                    .google-btn {
                        padding: 0.85rem 0.5rem;
                    }
                }

                @media (min-width: 768px) {
                    input {
                        font-size: 1.05rem;
                    }
                }

                /* Optional error message style */
                .error-message {
                    color: #e53e3e;
                    font-size: 0.8rem;
                    margin-top: 0.35rem;
                }
            </style>
        </head>
        <body>
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <h1>Login</h1>
                <p>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="johndoe" required>
                </p>
                <p>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="your@email.com" required>
                </p>
                <p>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" required>
                </p>
                <button type="submit">Submit</button>

                <!-- Divider and Google Login Button -->
                <div class="divider">or continue with</div>
                <a href="" class="google-btn">
                    <!-- Google "G" icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none">
                        <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                        <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                        <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.96 16.46 0 20.12 0 24c0 3.88.96 7.54 2.56 10.78l7.97-6.19z"/>
                        <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                    </svg>
                    Login with Google
                </a>
            </form>
        </body>
        </html>