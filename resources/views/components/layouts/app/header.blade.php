<flux:header container class="fixed w-full border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left"/>

    <a href="{{ route('home') }}" class="ms-2 me-5 flex items-center space-x-2 rtl:space-x-reverse lg:ms-0"
       wire:navigate>
        <x-app-logo/>
    </a>

    <flux:spacer/>

    <flux:navbar class="-mb-px max-lg:hidden">
        <flux:navbar.item icon="home" href="#home">
            خانه
        </flux:navbar.item>

        <flux:navbar.item icon="user" href="#about">
            درباره من
        </flux:navbar.item>

        <flux:navbar.item icon="layout-grid" href="#service">
            سرویس ها
        </flux:navbar.item>

        <flux:navbar.item icon="photo" href="#projects">
            نمونه کار ها
        </flux:navbar.item>

        <flux:navbar.item icon="phone">
            تماس با من
        </flux:navbar.item>
    </flux:navbar>

    <flux:spacer/>

    <flux:navbar class="me-1.5 space-x-0.5 rtl:space-x-reverse py-0!">
        <flux:tooltip content="تعییر تم" position="bottom">
            <flux:button class="text-zinc-800" x-data x-on:click="$flux.dark = ! $flux.dark" variant="subtle">
                <template x-if="$flux.appearance == 'system'">
                    <flux:icon.computer-desktop/>
                </template>
                <template x-if="$flux.appearance == 'light'">
                    <flux:icon.sun/>
                </template>
                <template x-if="$flux.appearance == 'dark'">
                    <flux:icon.moon/>
                </template>
            </flux:button>
        </flux:tooltip>
    </flux:navbar>
</flux:header>

<!-- Mobile Menu -->
<flux:sidebar stashable sticky
              class="lg:hidden border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark"/>

    <a class="ms-1 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
        <x-app-logo/>
    </a>

    <flux:navlist variant="outline">
        <flux:navlist.item icon="home" wire:navigate>
            خانه
        </flux:navlist.item>

        <flux:navlist.item icon="user" wire:navigate>
            درباره من
        </flux:navlist.item>

        <flux:navlist.item icon="layout-grid" wire:navigate>
            سرویس ها
        </flux:navlist.item>

        <flux:navlist.item icon="photo" wire:navigate>
            نمونه کار ها
        </flux:navlist.item>

        <flux:navlist.item icon="phone" wire:navigate>
            تماس با من
        </flux:navlist.item>
    </flux:navlist>
</flux:sidebar>