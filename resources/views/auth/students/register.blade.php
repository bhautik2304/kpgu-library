<!DOCTYPE html>
<html lang="en">

<head>
    <title>Booking - Multipurpose Online Booking Theme</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Booking - Multipurpose Online Booking Theme">

    <!-- Dark mode -->
    <script>
        const storedTheme = localStorage.getItem('theme')

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme
            }
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
        }

        const setTheme = function(theme) {
            if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.setAttribute('data-bs-theme', 'dark')
            } else {
                document.documentElement.setAttribute('data-bs-theme', theme)
            }
        }

        setTheme(getPreferredTheme())

        window.addEventListener('DOMContentLoaded', () => {
            var el = document.querySelector('.theme-icon-active');
            if (el != 'undefined' && el != null) {
                const showActiveTheme = theme => {
                    const activeThemeIcon = document.querySelector('.theme-icon-active use')
                    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                    const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

                    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                        element.classList.remove('active')
                    })

                    btnToActive.classList.add('active')
                    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
                }

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                    if (storedTheme !== 'light' || storedTheme !== 'dark') {
                        setTheme(getPreferredTheme())
                    }
                })

                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            localStorage.setItem('theme', theme)
                            setTheme(theme)
                            showActiveTheme(theme)
                        })
                    })

            }
        })
    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/students/assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/students/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/students/assets/css/style.css') }}">

</head>

<body>

    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
Main Content START -->
        <section class="vh-xxl-100">
            <div class="container h-100 d-flex px-0 px-sm-4">
                <div class="row justify-content-center align-items-center m-auto">
                    <div class="col-12">
                        <div class="bg-mode shadow rounded-3 overflow-hidden">
                            <div class="row g-0">
                                <!-- Vector Image -->
                                <div class="col-lg-6 d-flex align-items-center order-2 order-lg-1">
                                    <div class="p-3 p-lg-5">
                                        <a href="{{ route('home') }}"></a>
                                        <img src="{{ asset('/kpgu-logo.png') }}" alt="">
                                    </div>
                                    <!-- Divider -->
                                    <div class="vr opacity-1 d-none d-lg-block"></div>
                                </div>

                                <!-- Information -->
                                <div class="col-lg-6 order-1">
                                    <div class="p-4 p-sm-7">
                                        <!-- Title -->
                                        <h1 class="mb-2 h3">Welcome back</h1>
                                        <p class="mb-0">All Ready Have Accout?<a href="{{ route('studentlogin') }}">
                                                Login</a></p>

                                        <!-- Form START -->
                                        <form class="mt-4 text-start" action="{{ route('studentRegister') }}"
                                            method="POST">
                                            @csrf
                                            <!-- Email -->
                                            <div class="mb-3">
                                                <label class="form-label">Enter Name* </label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Enter Mobile* </label>
                                                <input type="number" class="form-control" id="number" name="number"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Enter email id* </label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="gender">Gender* </label>
                                                <select class="form-control" id="gender" name="gender" required>
                                                    <option value="1">Male</option>
                                                    <option value="0">Female</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="address">Address* </label>
                                                <input type="text" class="form-control" id="address"
                                                    name="address">
                                            </div>
                                            <div class="mb-3">
                                                <label for="academic">Academic* </label>
                                                <select class="form-control" id="academic" name="academic">
                                                    <option value="">Select Academic</option>
                                                    <option value="Pharmacy">Pharmacy</option>
                                                    <option value="Nursing">Nursing</option>
                                                    <option value="Physiotherapy">Physiotherapy</option>
                                                    <option value="Engineerning">Engineering</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="Ayurved">Ayurved</option>
                                                    <option value="Commerce">Commerce</option>
                                                    <option value="Arts">Arts</option>
                                                    <option value="Science">Science</option>
                                                    <option value="BBA">BBA</option>
                                                    <option value="MBA">MBA</option>
                                                    <option value="Research">Research</option>
                                                </select>
                                            </div>

                                            <!-- Password -->
                                            <div class="mb-3 position-relative">
                                                <label for="program">Program* </label>
                                                <input type="text" class="form-control" id="program"
                                                    name="program">
                                            </div>
                                            <div class="mb-3">
                                                <label for="semester">Semester* </label>
                                                <select class="form-control" id="semester" name="semester">
                                                    <option value="">Select Semester</option>
                                                    <option value="1st Sem">1st Sem</option>
                                                    <option value="2nd Sem">2nd Sem</option>
                                                    <option value="3rd Sem">3rd Sem</option>
                                                    <option value="4th Sem">4th Sem</option>
                                                    <option value="5th Sem">5th Sem</option>
                                                    <option value="6th Sem">6th Sem</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 position-relative">
                                                <label class="form-label">Enter password* </label>
                                                <input class="form-control fakepassword" type="password"
                                                    name="password" id="psw-input">
                                                <span
                                                    class="position-absolute top-50 end-0 translate-middle-y p-0 mt-3">
                                                    <i
                                                        class="fakepasswordicon fas fa-eye-slash cursor-pointer p-2"></i>
                                                </span>
                                            </div>
                                            <!-- Remember me -->
                                            <div class="mb-3 d-sm-flex justify-content-between">
                                                <div>
                                                    <input type="checkbox" class="form-check-input"
                                                        id="rememberCheck">
                                                    <label class="form-check-label" for="rememberCheck">Remember
                                                        me? </label>
                                                </div>
                                                <a href="forgot-password.html">Forgot password?</a>
                                            </div>
                                            <!-- Button -->
                                            <div><button type="submit"
                                                    class="btn btn-primary w-100 mb-0">Login</button></div>

                                            <!-- Divider -->
                                            <div class="position-relative my-4">
                                                <hr>
                                            </div>


                                            <!-- Copyright -->
                                            <div class="text-primary-hover text-body mt-3 text-center"> Copyrights
                                                ©2023
                                                Reserved by <a href="https://kpgu.ac.in/" class="text-body">KPGU</a>.
                                            </div>
                                        </form>
                                        <!-- Form END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
Main Content END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- Back to top -->
    <div class="back-top"></div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('/students/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- ThemeFunctions -->
    <script src="{{ asset('/students/assets/js/functions.js') }}"></script>

</body>

</html>
