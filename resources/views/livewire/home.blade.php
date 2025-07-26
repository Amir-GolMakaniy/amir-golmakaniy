<?php

use Livewire\Volt\Component;

new class extends Component {

}; ?>

<flux:main>
    <flux:container>
        <section class="mt-25 grid md:grid-cols-2 grid-cols-1 scroll-mt-40" id="home">
            <div class="space-y-4 flex flex-col items-center md:items-start justify-center md:justify-start text-center md:text-start">
                <h1 class="text-xl">سلام! من امیرم 👋</h1>
                <h1 class="text-6xl font-bold">امیر گلمکانی</h1>
                <h1 class="text-5xl font-bold text-blue-500">فول استک دولوپر</h1>
                <h1 class="text-3xl font-bold">توسعه دهنده وب با Livewire و Tailwind</h1>
                <p class="text-wrap text-zinc-700 dark:text-zinc-300">
                    فارغ‌التحصیل رشته کامپیوترم و مسیر حرفه‌ای خودم رو با تمرکز روی بک‌اند شروع کردم. فعلاً با Livewire
                    و Tailwind پروژه می‌سازم و به‌صورت جدی در حال گسترش مهارت‌هام در فرانت‌اند هستم. اینجا بخشی از
                    نمونه‌کارهایی رو می‌بینی که نه‌تنها برای یادگیری عمیق‌تر ساختم، بلکه پایه‌ی برند شخصی من در مسیر
                    برنامه‌نویس شدن واقعی‌ان.
                </p>

                <div class="mt-10">
                    <flux:button class="px-10 py-6" variant="primary" href="#projects">مشاهده نمونه کار ها</flux:button>
                </div>

                <div class="mt-10">
                    <flux:button-or-link class="cursor-pointer text-2xl" href="tel:09381583958">
                        0938-158-3958
                    </flux:button-or-link>
                </div>

                <div class="flex space-x-6">

                    <a href="https://t.me/Amir_Golmakaniy">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#0088cc"
                             class="bi bi-telegram" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
                        </svg>
                    </a>

                    <a href="https://instagram.com/Amir_Golmakaniy">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#E4405F
" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                        </svg>
                    </a>

                    <a href="https://github.com/Amir-Golmakaniy">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#181717
" class="bi bi-github fill-current" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                        </svg>
                    </a>

                    <a href="https://www.linkedin.com/in/amir-golmakaniy">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#0077B5
" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="">
            </div>
        </section>

        <section class="mt-20 grid md:grid-cols-2 grid-cols-1 shadow-2xl scroll-mt-40" id="about">
            <div class=""></div>
            <div class="space-y-8 flex flex-col items-center md:items-start justify-center text-center md:text-start">
                <h1 class="text-6xl font-bold">درباره من</h1>
                <h1 class="text-4xl font-bold">من امیر گلمکانی‌ام <br/> فول‌استک دولوپر</h1>
                <p class="text-wrap text-zinc-700 dark:text-zinc-300">
                    من امیر گل‌مکانی هستم، فارغ‌التحصیل رشته کامپیوتر و علاقه‌مند به توسعه وب. فعلاً تمرکزم روی
                    برنامه‌نویسی بک‌اند با PHP و Livewire هست، و در حال یادگیری عمیق‌تر فرانت‌اند با Tailwind و
                    Alpine.js. عاشق ساختن پروژه‌هایی‌ام که کاربردی باشن، تمیز نوشته بشن و واقعاً یه مسئله رو حل کنن. این
                    سایت برای منه؛ هم به‌عنوان نمونه‌کار، هم بخشی از مسیر ساخت برند شخصی.
                </p>
            </div>
        </section>

        <section class="mt-20 scroll-mt-40" id="jobs">
            <h2 class="text-5xl font-bold">مهارت های من</h2>
            <div class="grid md:grid-cols-2 grid-cols-1 mt-8 gap-10">
                <div class="">
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700 dark:text-white">PHP</span>
                        <span class="text-sm font-medium text-blue-700 dark:text-white">95%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 95%"></div>
                    </div>
                </div>

                <div class="">
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700 dark:text-white">HTML</span>
                        <span class="text-sm font-medium text-blue-700 dark:text-white">95%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 95%"></div>
                    </div>
                </div>

                <div class="">
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700 dark:text-white">Laravel</span>
                        <span class="text-sm font-medium text-blue-700 dark:text-white">80%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 80%"></div>
                    </div>
                </div>

                <div class="">
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700 dark:text-white">CSS</span>
                        <span class="text-sm font-medium text-blue-700 dark:text-white">80%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 80%"></div>
                    </div>
                </div>

                <div class="">
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700 dark:text-white">Livewire</span>
                        <span class="text-sm font-medium text-blue-700 dark:text-white">50%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 50%"></div>
                    </div>
                </div>

                <div class="">
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700 dark:text-white">Bootstrap</span>
                        <span class="text-sm font-medium text-blue-700 dark:text-white">80%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 80%"></div>
                    </div>
                </div>

                <div class="">
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700 dark:text-white">Javascript</span>
                        <span class="text-sm font-medium text-blue-700 dark:text-white">75%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 75%"></div>
                    </div>
                </div>

                <div class="">
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700 dark:text-white">Tailwind CSS</span>
                        <span class="text-sm font-medium text-blue-700 dark:text-white">70%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 70%"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-20 scroll-mt-40" id="service">
            <h2 class="text-5xl font-bold">چی کار میکنم؟</h2>
            <div class="mt-20 flex gap-4 flex-col md:flex-row">
                <div class="cursor-pointer p-10 hover:bg-blue-500 hover:text-white transition-all delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 rounded-md space-y-6 shadow-2xl">
                    <h1 class="text-3xl font-bold">طراحی وب</h1>
                    <p class="">طراحی و توسعه وبسایت‌های داینامیک با PHP، Laravel، Livewire و Tailwind.
                        پروژه‌هات رو از صفر تا صد
                        می‌سازم با تمرکز روی کارایی و تجربه کاربری بالا.</p>
                </div>

                <div class="cursor-pointer p-10 hover:bg-blue-500 hover:text-white transition-all delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 rounded-md space-y-6 shadow-2xl">
                    <h1 class="text-3xl font-bold">طراحی UI/UX</h1>
                    <p class="">طراحی رابط‌های کاربری مینیمال و کاربردی، با توجه به نیاز کاربران واقعی. با Tailwind
                        طراحی می‌کنم و سعی می‌کنم همیشه تجربه کاربری رو اول قرار بدم.</p>
                </div>

                <div class="cursor-pointer p-10 hover:bg-blue-500 hover:text-white transition-all delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 rounded-md space-y-6 shadow-2xl">
                    <h1 class="text-3xl font-bold">آموزش برنامه‌نویسی</h1>
                    <p class="">تولید محتوای آموزشی درباره برنامه‌نویسی، طراحی وب، و تجربه‌هایی که توی پروژه‌های واقعی
                        به دست آوردم. هدفم اینه که مسیری که رفتم رو برای بقیه آسون‌تر کنم.</p>
                </div>
            </div>
        </section>

        <section class="mt-20 scroll-mt-20" id="projects">
            <h1 class="text-5xl font-bold">پروژه های من</h1>
            <div class="grid md:grid-cols-2 grid-cols-1 mt-20 gap-4">
                <div class="bg-zinc-50 dark:bg-zinc-800 transition-all delay-150 duration-300 ease-in-out hover:-translate-y-1 space-y-6 rounded-md cursor-pointer shadow-2xl">
                    <img src="{{ asset('images/projects/1.png') }}" alt="navid-javadi" class="rounded-md h-100 w-full">
                    <div class="pr-5 pb-5 space-y-4">
                        <h1 class="text-2xl font-bold">مدیریت باشگاه رشد</h1>
                    </div>
                </div>

                <div class="bg-zinc-50 dark:bg-zinc-800 transition-all delay-150 duration-300 ease-in-out hover:-translate-y-1 space-y-6 rounded-md cursor-pointer shadow-2xl">
                    <img src="{{ asset('images/projects/2.png') }}" alt="club" class="rounded-md h-100 w-full">
                    <div class="pr-5 pb-5 space-y-4">
                        <h1 class="text-2xl font-bold">مدیریت باشگاه</h1>
                        <flux:button href="https://club.amir-golmakaniy.ir">مشاهده</flux:button>
                    </div>
                </div>
            </div>
        </section>
    </flux:container>
</flux:main>