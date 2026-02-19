<header class="fixed top-0 w-full z-[100] px-4 py-6 md:px-10 lg:px-16" data-aos="fade-down" data-aos-duration="1200">
    <div class="max-w-7xl mx-auto flex items-center justify-between bg-white/80 backdrop-blur-lg border border-white/20 shadow-[0_8px_32px_0_rgba(31,38,135,0.07)] rounded-2xl px-6 py-4 transition-all duration-300 hover:shadow-orange-100/50 hover:border-orange-100">
        
        <div class="flex flex-col group cursor-pointer">
            <span class="text-xl md:text-2xl font-black tracking-tighter text-slate-900 group-hover:text-orange-600 transition-colors">
                PRAMOD <span class="text-orange-600 group-hover:text-slate-900 underline decoration-2 underline-offset-4">THAKKAR</span>
            </span>
            <span class="text-[10px] uppercase tracking-[0.2em] font-bold text-slate-500">Humanitarian & Leader</span>
        </div>

        <nav class="hidden lg:flex items-center space-x-10">
            <?php 
                $navLinks = [
                    'Home' => '#hero',
                    'Impact' => '#impact',
                    'Legacy' => '#professional-life',
                    'Social Legacy' => '#social-legacy',
                    'Milestone' => '#milestones',
                    'Entrepreneur' => '#entrepreneur',
                    'Vision' => '#vision'
                ];
                foreach($navLinks as $name => $link): 
            ?>
                <a href="<?php echo $link; ?>" class="relative text-sm font-bold text-slate-700 hover:text-orange-600 transition-colors py-2 group">
                    <?php echo strtoupper($name); ?>
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-orange-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
            <?php endforeach; ?>
        </nav>

        <div class="flex items-center space-x-4">
            <a href="#contact" class="hidden md:inline-block bg-orange-600 hover:bg-slate-900 text-white text-xs font-black uppercase tracking-widest px-8 py-3 rounded-xl transition-all duration-500 transform hover:-translate-y-1 shadow-lg shadow-orange-200">
                Get In Touch
            </a>
            
            <button id="mobile-menu-btn" class="lg:hidden flex flex-col justify-center items-center w-10 h-10 space-y-1.5 focus:outline-none group">
                <span class="block w-6 h-0.5 bg-slate-900 group-hover:bg-orange-600 transition-all"></span>
                <span class="block w-4 h-0.5 bg-slate-900 group-hover:bg-orange-600 transition-all"></span>
                <span class="block w-6 h-0.5 bg-slate-900 group-hover:bg-orange-600 transition-all"></span>
            </button>
        </div>
    </div>

    <div id="mobile-menu" class="hidden lg:hidden absolute top-28 left-4 right-4 bg-white/95 backdrop-blur-xl border border-slate-100 rounded-2xl shadow-2xl p-6 flex flex-col space-y-4 text-center animate-in fade-in slide-in-from-top-5 duration-300">
        <a href="#hero" class="text-lg font-bold text-slate-900 py-2 border-b border-slate-50">Home</a>
        <a href="#impact" class="text-lg font-bold text-slate-900 py-2 border-b border-slate-50">Impact</a>
        <a href="#professional-life" class="text-lg font-bold text-slate-900 py-2 border-b border-slate-50">Legacy</a>
        <a href="#social-legacy" class="text-lg font-bold text-slate-900 py-2 border-b border-slate-50">Social Legacy</a>
        <a href="#milestones" class="text-lg font-bold text-slate-900 py-2 border-b border-slate-50">Milestones</a>
        <a href="#entrepreneur" class="text-lg font-bold text-slate-900 py-2 border-b border-slate-50">Entrepreneur</a>
        <a href="#vision" class="text-lg font-bold text-slate-900 py-2 border-b border-slate-50">Vision</a>
        <a href="#contact" class="bg-orange-600 text-white font-bold py-4 rounded-xl">Contact Pramod Sir</a>
    </div>
</header>

<script>
    // Simple toggle logic for the mobile menu
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // Close menu on scroll to keep it clean
    window.addEventListener('scroll', () => {
        if(!menu.classList.contains('hidden')) {
            menu.classList.add('hidden');
        }
    });
</script>