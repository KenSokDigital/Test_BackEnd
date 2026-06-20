        
        
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Register - ShopLic_Soft</title>
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

                /* -------------------- Error Message Alert Box -------------------- */
                /* NEW: Styling for the JavaScript error message */
                .alert-box {
                    background-color: #fee2e2;
                    /* Light red background */
                    color: #dc2626;
                    /* Dark red text */
                    border: 1px solid #f87171;
                    padding: 0.75rem 1rem;
                    border-radius: 0.5rem;
                    margin-bottom: 1.25rem;
                    font-size: 0.9rem;
                    font-weight: 600;
                    text-align: center;
                    display: none;
                    /* Hidden by default */
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

                    button[type="submit"] {
                        padding: 0.85rem 0.5rem;
                    }
                }

                @media (min-width: 768px) {
                    input {
                        font-size: 1.05rem;
                    }
                }
            </style>
        </head>

        <body>
            <form action="{{ route('register.submit') }}" method="POST" id="registerForm">

                @csrf

                <h1>Register</h1>

                <div id="errorMessage" class="alert-box"></div>

                <p>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="johndoe" required>
                </p>

                <p>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="you@example.com" required>
                </p>

                <p>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" required>
                </p>

                <p>
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" required>
                </p>

                <button type="submit">Submit</button>
            </form>

        </body>
        </html>