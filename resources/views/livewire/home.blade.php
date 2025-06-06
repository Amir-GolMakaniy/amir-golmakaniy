<?php

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {

}; ?>

<flux:container>
    <!-- Hero section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="hero-inner d-flex">
                <div class="col-left">
                    <span class="sub-heading">سلام! من امیرم 👋</span>
                    <h1 class="heading">امیر گلمکانی
                        <span style="font-size: 4rem">فول‌استک دولوپر</span>
                    </h1>
                    <h4 class="heading2">توسعه‌دهنده وب با تمرکز روی Livewire و Tailwind</h4>
                    <p class="paragraph">
                        دانش‌آموز پایه ۱۲ رشته کامپیوتر، با علاقه شدید به برنامه‌نویسی بک‌اند و حرکت به سمت فرانت‌اند.
                        فعلاً با Livewire و Tailwind پروژه‌ می‌سازم، و دنبال رشد جدی تو این فضا هستم.
                        نمونه‌کارهایی که اینجا می‌بینی بخشی از مسیر حرفه‌ای منه برای ساختن یه برند شخصی قدرتمند.
                    </p>
                    <div class="btn-blk">
                        <a href="#contact" class="btn btn-blue">بیایید صحبت کنیم</a>
                        <a href="#portfolio" class="btn btn-black">مشاهده نمونه‌کارها</a>
                    </div>
                    <div class="social">
                        <ul>
                            <li class="social-icon">
                                <a href="t.me/Amir_Golmakaniy">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#0088cc"
                                         class="bi bi-telegram" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="social-icon">
                                <a href="https://instagram.com/Amir_Golmakaniy">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#E4405F
" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="social-icon">
                                <a href="https://github.com/Amir-Golmakaniy">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#181717
" class="bi bi-github" viewBox="0 0 16 16">
                                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="social-icon">
                                <a href="https://www.linkedin.com/in/amir-golmakaniy">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#0077B5
" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-right">
                    <img class="image-main" src="{{ asset('images/amir-day.png') }}" alt="">
                    <img class="image-darkmode" src="{{ asset('images/amir-night.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- features -->
    <section class="features">
        <div class="container">
            <div class="features-inner d-grid">
                <div class="feature-item d-flex">
                    <div class="icon d-flex color1">
                        <img src="{{ asset('images/experience.svg') }}" alt="experience">
                    </div>
                    <div>
                        <h3>3+</h3>
                        <p>سال تجربه با کد و پروژه</p>
                    </div>
                </div>
                <div class="feature-item d-flex">
                    <div class="icon d-flex color2">
                        <img src="{{ asset('images/happy-clients.svg') }}" alt="happy clients">
                    </div>
                    <div>
                        <h3>30+</h3>
                        <p>مشتری و همکار راضی</p>
                    </div>
                </div>
                <div class="feature-item d-flex">
                    <div class="icon d-flex color3">
                        <img src="{{ asset('images/projects-completed.svg') }}" alt="projects">
                    </div>
                    <div>
                        <h3>50+</h3>
                        <p>پروژه شخصی و همکاری</p>
                    </div>
                </div>
                <div class="feature-item d-flex">
                    <div class="icon d-flex color4">
                        <img src="{{ asset('images/awards-won.svg') }}" alt="awards">
                    </div>
                    <div>
                        <h3>در حال رشد 🚀</h3>
                        <p>هر روز یه قدم جلوتر!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="about ptb-100" id="about">
        <div class="container">
            <div class="about-inner d-flex">
                <div class="about-col-left">
                    <img src="{{ asset('images/') }}" alt="">
                </div>
                <div class="about-col-right">
                    <h2 class="about-heading">درباره من</h2>
                    <h3 class="about2">من امیر گلمکانی‌ام - فول‌استک دولوپر</h3>
                    <p class="about3">
                        من یه برنامه‌نویسم که عاشق کد زدن با طعم طراحی‌ام. تخصصم توی PHP، Laravel، Livewire و
                        TailwindCSSه و در حال ساخت پروژه‌های واقعی و آموزش مسیر یادگیری‌ام به دیگرانم. برام مهمه همه چیز
                        تمیز، درست و اصولی جلو بره. هدفم؟ ساختن یه جامعه‌ی قوی از دولوپرهایی که فقط یاد نمی‌گیرن، بلکه
                        خلق می‌کنن.
                    </p>
                    {{--<div class="about-btn-blk">
                        <a href="{{ asset('resume.pdf') }}" class="btn btn-blue about-btn" download>دانلود رزومه</a>
                    </div>--}}
                </div>
            </div>
        </div>
    </section>

    <!-- Experience -->
    <section class="experience ptb-100">
        <div class="container">
            <h2>مهارت های من </h2>
            <div class="experience-inner d-grid">
                <!-- item -->
                <div class="progressbar-item">
                    <div class="progressbar-content d-flex">
                        <h3>PHP</h3>
                        <h4>95%</h4>
                    </div>
                    <div class="progessbar-bg">
                        <div class="progressbar-size" style="width:95%"></div>
                    </div>
                </div>
                <!-- item -->
                <div class="progressbar-item">
                    <div class="progressbar-content d-flex">
                        <h3>HTML</h3>
                        <h4>95%</h4>
                    </div>
                    <div class="progessbar-bg">
                        <div class="progressbar-size" style="width:95%"></div>
                    </div>
                </div>
                <!-- item -->
                <div class="progressbar-item">
                    <div class="progressbar-content d-flex">
                        <h3>Laravel</h3>
                        <h4>80%</h4>
                    </div>
                    <div class="progessbar-bg">
                        <div class="progressbar-size" style="width:80%"></div>
                    </div>
                </div>
                <!-- item -->
                <div class="progressbar-item">
                    <div class="progressbar-content d-flex">
                        <h3>CSS</h3>
                        <h4>80%</h4>
                    </div>
                    <div class="progessbar-bg">
                        <div class="progressbar-size" style="width:80%"></div>
                    </div>
                </div>
                <!-- item -->
                <div class="progressbar-item">
                    <div class="progressbar-content d-flex">
                        <h3>Livewire</h3>
                        <h4>50%</h4>
                    </div>
                    <div class="progessbar-bg">
                        <div class="progressbar-size" style="width:50%"></div>
                    </div>
                </div>
                <!-- item -->
                <div class="progressbar-item">
                    <div class="progressbar-content d-flex">
                        <h3>Bootstrap</h3>
                        <h4>80%</h4>
                    </div>
                    <div class="progessbar-bg">
                        <div class="progressbar-size" style="width:80%"></div>
                    </div>
                </div>
                <!-- item -->
                <div class="progressbar-item">
                    <div class="progressbar-content d-flex">
                        <h3>Javascript</h3>
                        <h4>75%</h4>
                    </div>
                    <div class="progessbar-bg">
                        <div class="progressbar-size" style="width:75%"></div>
                    </div>
                </div>
                <!-- item -->
                <div class="progressbar-item">
                    <div class="progressbar-content d-flex">
                        <h3>Tailwind CSS</h3>
                        <h4>70%</h4>
                    </div>
                    <div class="progessbar-bg">
                        <div class="progressbar-size" style="width:70%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="services ptb-100" id="services">
        <div class="container">
            <h2>چی کار می‌کنم؟</h2>
            <div class="services-inner d-grid">

                <!-- توسعه وب -->
                <div class="services-block">
                    <div class="service-icon color2 d-flex">
                        <img src="{{ asset('images/services/web-dev.svg') }}" alt="web dev">
                    </div>
                    <h3>توسعه وب</h3>
                    <p>
                        طراحی و توسعه وبسایت‌های داینامیک با PHP، Laravel، Livewire و Tailwind. پروژه‌هات رو از صفر تا
                        صد می‌سازم با تمرکز روی کارایی و تجربه کاربری بالا.
                    </p>
                </div>

                <!-- طراحی رابط کاربری -->
                <div class="services-block">
                    <div class="service-icon color1 d-flex">
                        <img src="{{ asset('images/services/ui-design.svg') }}" alt="ui design">
                    </div>
                    <h3>طراحی UI/UX</h3>
                    <p>
                        طراحی رابط‌های کاربری مینیمال و کاربردی، با توجه به نیاز کاربران واقعی. با Tailwind طراحی می‌کنم
                        و سعی می‌کنم همیشه تجربه کاربری رو اول قرار بدم.
                    </p>
                </div>

                <!-- آموزش و تولید محتوا آموزشی -->
                <div class="services-block">
                    <div class="service-icon color5 d-flex">
                        <img src="{{ asset('images/services/content-writing.svg') }}" alt="Content writing">
                    </div>
                    <h3>آموزش برنامه‌نویسی</h3>
                    <p>
                        تولید محتوای آموزشی درباره برنامه‌نویسی، طراحی وب، و تجربه‌هایی که توی پروژه‌های واقعی به دست
                        آوردم. هدفم اینه که مسیری که رفتم رو برای بقیه آسون‌تر کنم.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <div class="container">
            <div class="cta-inner d-flex">
                <div class="cta-content">
                    <h3>آیا پروژه ای در ذهن دارید؟</h3>
                    <p>من امیر گلمکانی، برنامه نویس وب هستم و آماده‌ام پروژه شما را به واقعیت تبدیل کنم. بیاید با هم
                        شروع کنیم!</p>
                </div>
                <a href="#contact" class="btn btn-default">تماس با من</a>
            </div>
        </div>
    </section>

    <!-- projects -->
    <section class="projects ptb-100" id="portfolio">
        <div class="container">
            <h2>پروژه‌های اخیر امیر گلمکانی</h2>
            <div class="projects-inner d-grid">
                <!-- item -->
                <div class="project-item">
                    <div class="project-image">
                        <img src="{{ asset('images/projects/1.png') }}" alt="project image">
                    </div>
                    <div class="project-content">
                        <h3>مدیریت باشگاه فوتبال رشد</h3>
                        <div class="project-view d-flex">
                            <span>Laravel , Livewire , bootstrap</span>
                            <a href="javascript:void(0)" class="btn-view">مشاهده</a>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="project-item">
                    <div class="project-image">
                        <img src="{{ asset('images/projects/2.png') }}" alt="project image">
                    </div>
                    <div class="project-content">
                        <h3>مدیریت باشگاه</h3>
                        <div class="project-view d-flex">
                            <span>Laravel , Tailwind CSS</span>
                            <a href="javascript:void(0)" class="btn-view">مشاهده</a>
                        </div>
                    </div>
                </div>
                {{--<div class="view-more-block">
                    <a href="#" class="btn btn-outline">مشاهده بیشتر</a>
                </div>--}}
            </div>
        </div>
    </section>

    <!-- Testmonial -->
    {{--    <section class="testmonial">--}}
    {{--        <div class="container">--}}
    {{--            <div class="testmonial-inner">--}}
    {{--                <h2>مشتریان راضی امیر گلمکانی</h2>--}}
    {{--                <div class="testmonial-slider owl-carousel owl-theme">--}}
    {{--                    <!-- item -->--}}
    {{--                    <div class="testmonial-item">--}}
    {{--                        <h3>سامانه مدیریت آموزش</h3>--}}
    {{--                        <p>امیر توانست پروژه ما را دقیق و با کیفیت عالی تحویل دهد. حرفه‌ای و با دانش روز کار می‌کند و--}}
    {{--                            پاسخگو است.</p>--}}
    {{--                        <div class="client-data d-flex">--}}
    {{--                            <img src="{{ asset('images/client-1.png') }}" alt="client thumb">--}}
    {{--                            <h4>حسن رضایی--}}
    {{--                                <br> <span>مدیر پروژه</span>--}}
    {{--                            </h4>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- item -->--}}
    {{--                    <div class="testmonial-item">--}}
    {{--                        <h3>سایت فروشگاهی محصولات دیجیتال</h3>--}}
    {{--                        <p>از همکاری با امیر گلمکانی بسیار راضی هستیم. پروژه به موقع و با بهترین کیفیت اجرا شد.</p>--}}
    {{--                        <div class="client-data d-flex">--}}
    {{--                            <img src="{{ asset('images/client-2.png') }}" alt="client thumb">--}}
    {{--                            <h4>مریم اسدی--}}
    {{--                                <br> <span>کارفرما</span>--}}
    {{--                            </h4>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- item -->--}}
    {{--                    <div class="testmonial-item">--}}
    {{--                        <h3>اپلیکیشن رزرو آنلاین</h3>--}}
    {{--                        <p>مهارت و تجربه امیر در برنامه‌نویسی واقعا تاثیرگذار بود. پروژه ما دقیقا آن چیزی شد که انتظار--}}
    {{--                            داشتیم.</p>--}}
    {{--                        <div class="client-data d-flex">--}}
    {{--                            <img src="{{ asset('images/client-1.png') }}" alt="client thumb">--}}
    {{--                            <h4>علی کاظمی--}}
    {{--                                <br> <span>مدیر فنی</span>--}}
    {{--                            </h4>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- item -->--}}
    {{--                    <div class="testmonial-item">--}}
    {{--                        <h3>پنل مدیریت کاربران</h3>--}}
    {{--                        <p>طراحی و کدنویسی با استانداردهای روز انجام شد. همکاری با امیر بسیار لذت‌بخش بود.</p>--}}
    {{--                        <div class="client-data d-flex">--}}
    {{--                            <img src="{{ asset('images/client-2.png') }}" alt="client thumb">--}}
    {{--                            <h4>سارا محمدی--}}
    {{--                                <br> <span>مدیر بازاریابی</span>--}}
    {{--                            </h4>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- item -->--}}
    {{--                    <div class="testmonial-item">--}}
    {{--                        <h3>وب‌سایت شخصی امیر گلمکانی</h3>--}}
    {{--                        <p>وب‌سایت حرفه‌ای و زیبایی که امیر طراحی کرد، واقعاً توجه همه را جلب کرد. ممنون از زحماتت.</p>--}}
    {{--                        <div class="client-data d-flex">--}}
    {{--                            <img src="{{ asset('images/client-1.png') }}" alt="client thumb">--}}
    {{--                            <h4>فرهاد محمودی--}}
    {{--                                <br> <span>دوست و همکار</span>--}}
    {{--                            </h4>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <!-- Contact Me -->
    <section class="contact ptb-100" id="contact">
        <div class="container">
            <h2>تماس با من</h2>
            <div class="contact-inner d-flex" style="flex: auto;justify-content: center;align-items: center">
                <h2>09381583958</h2>
            </div>
        </div>
    </section>
</flux:container>