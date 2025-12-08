@props([
    'defaultOpen' => true,
    'sidebarWidth' => '16rem',
    'sidebarWidthMobile' => '18rem',
])

<div
    x-data="{
        open: true,
        openMobile: false,
        isMobile: window.innerWidth < 1024,
        toggleSidebar() {
            if (this.isMobile) {
                this.openMobile = !this.openMobile;
            } else {
                this.open = !this.open;
                localStorage.setItem('sidebar_open', this.open);
            }
        },
        init() {
            // Check localStorage for saved state
            const savedState = localStorage.getItem('sidebar_open');
            if (savedState !== null) {
                this.open = savedState === 'true';
            }

            // Handle resize
            const handleResize = () => {
                const wasMobile = this.isMobile;
                this.isMobile = window.innerWidth < 1024;

                // Close mobile menu when switching to desktop
                if (wasMobile && !this.isMobile) {
                    this.openMobile = false;
                }
            };

            window.addEventListener('resize', handleResize);
            handleResize();

            // Handle keyboard shortcut (Ctrl/Cmd + B)
            window.addEventListener('keydown', (e) => {
                if ((e.metaKey || e.ctrlKey) && e.key === 'b') {
                    e.preventDefault();
                    this.toggleSidebar();
                }
            });
        }
    }"
    class="flex min-h-screen w-full bg-slate-50"
>
    {{ $slot }}
</div>

<style>
    [x-cloak] { display: none !important; }
</style>
