<footer id="contact" class="relative pt-16 md:pt-24 pb-8 md:pb-12 px-4 sm:px-6 md:px-12 lg:px-24 bg-white overflow-hidden">
    
    <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-[300px] md:w-[600px] h-[300px] md:h-[600px] bg-orange-50 rounded-full opacity-50 blur-3xl"></div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 mb-16 md:mb-20">
            
            <div data-aos="fade-right" class="text-center lg:text-left">
                <h2 class="text-orange-600 font-black uppercase tracking-[0.3em] md:tracking-[0.4em] text-[10px] md:text-xs mb-4">Contact</h2>
                <h3 class="text-3xl md:text-6xl font-black text-slate-900 mb-6 md:mb-8 leading-tight">
                    Let’s Build a <br class="hidden md:block"> <span class="text-transparent bg-clip-text bg-gradient-to-r from-slate-800 to-orange-600">Better Future.</span>
                </h3>
                
                <p class="text-slate-600 text-sm md:text-lg mb-8 md:mb-10 max-w-md mx-auto lg:mx-0">
                    Pramod Thakkar is always open to discussing new community initiatives, social welfare programmes, and strategic collaborations.
                </p>

                <div class="space-y-6 flex flex-col items-center lg:items-start">
                    <div class="flex flex-col sm:flex-row items-center gap-4 md:gap-6 group text-center sm:text-left">
                        <div class="w-12 h-12 md:w-14 md:h-14 bg-slate-900 text-white rounded-2xl flex items-center justify-center text-lg md:text-xl group-hover:bg-orange-600 transition-colors duration-500">📍</div>
                        <div>
                            <p class="text-[8px] md:text-[10px] font-black uppercase text-slate-400 tracking-widest">Primary Base</p>
                            <p class="font-bold text-slate-900 text-sm md:text-base">Leicester, United Kingdom</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row items-center gap-4 md:gap-6 group text-center sm:text-left">
                        <div class="w-12 h-12 md:w-14 md:h-14 bg-slate-900 text-white rounded-2xl flex items-center justify-center text-lg md:text-xl group-hover:bg-orange-600 transition-colors duration-500">✉️</div>
                        <div>
                            <p class="text-[8px] md:text-[10px] font-black uppercase text-slate-400 tracking-widest">Enquiries</p>
                            <p class="font-bold text-slate-900 text-sm md:text-base">info@pramodthakkar.com</p>
                        </div>
                    </div>
                </div>

                <div class="mt-10 md:mt-12 flex justify-center lg:justify-start gap-4">
                    <a href="#" class="w-10 h-10 md:w-12 md:h-12 border border-slate-200 rounded-full flex items-center justify-center text-xs font-bold hover:bg-orange-600 hover:text-white hover:border-orange-600 transition-all">FB</a>
                    <a href="#" class="w-10 h-10 md:w-12 md:h-12 border border-slate-200 rounded-full flex items-center justify-center text-xs font-bold hover:bg-orange-600 hover:text-white hover:border-orange-600 transition-all">LN</a>
                    <a href="#" class="w-10 h-10 md:w-12 md:h-12 border border-slate-200 rounded-full flex items-center justify-center text-xs font-bold hover:bg-orange-600 hover:text-white hover:border-orange-600 transition-all">YT</a>
                </div>
            </div>

            <div data-aos="fade-left" class="bg-slate-900 p-6 sm:p-8 md:p-12 rounded-[2.5rem] md:rounded-[3rem] shadow-2xl relative">
                <form action="process.php" method="POST" class="space-y-5 md:space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-6">
                        <div>
                            <label class="block text-[8px] md:text-[10px] font-black uppercase text-slate-400 mb-2 ml-2">Full Name</label>
                            <input type="text" name="name" placeholder="John Doe" class="w-full bg-slate-800 border border-slate-700 rounded-xl md:rounded-2xl px-5 md:px-6 py-3 md:py-4 text-white text-sm focus:outline-none focus:border-orange-500 transition-all">
                        </div>
                        <div>
                            <label class="block text-[8px] md:text-[10px] font-black uppercase text-slate-400 mb-2 ml-2">Email Address</label>
                            <input type="email" name="email" placeholder="john@example.com" class="w-full bg-slate-800 border border-slate-700 rounded-xl md:rounded-2xl px-5 md:px-6 py-3 md:py-4 text-white text-sm focus:outline-none focus:border-orange-500 transition-all">
                        </div>
                    </div>
                    <div>
                        <label class="block text-[8px] md:text-[10px] font-black uppercase text-slate-400 mb-2 ml-2">Subject</label>
                        <select name="subject" class="w-full bg-slate-800 border border-slate-700 rounded-xl md:rounded-2xl px-5 md:px-6 py-3 md:py-4 text-white text-sm focus:outline-none focus:border-orange-500 transition-all appearance-none cursor-pointer">
                            <option>Community Initiative</option>
                            <option>JHOD Enquiry</option>
                            <option>Jalaram Trust Enquiry</option>
                            <option>Professional Consultancy</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[8px] md:text-[10px] font-black uppercase text-slate-400 mb-2 ml-2">Your Message</label>
                        <textarea name="message" rows="4" placeholder="How can Pramod Sir assist you?" class="w-full bg-slate-800 border border-slate-700 rounded-xl md:rounded-2xl px-5 md:px-6 py-3 md:py-4 text-white text-sm focus:outline-none focus:border-orange-500 transition-all"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-orange-600 hover:bg-white hover:text-orange-600 text-white font-black uppercase tracking-widest py-4 md:py-5 rounded-xl md:rounded-2xl transition-all duration-500 shadow-xl shadow-orange-900/20 text-xs md:text-sm">
                        Send Message
                    </button>
                </form>
            </div>
        </div>

        <div class="w-full h-px bg-slate-100 mb-8 md:mb-12"></div>

        <div class="flex flex-col md:flex-row justify-between items-center gap-8 text-center md:text-left">
            <div class="flex flex-col items-center md:items-start">
                <p class="text-xl md:text-2xl font-black text-slate-900 tracking-tighter uppercase">Pramod <span class="text-orange-600">Thakkar</span></p>
                <p class="text-[8px] md:text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-1">Leading with Compassion since 1983</p>
            </div>
            
            <div class="flex flex-wrap justify-center gap-4 md:gap-8 text-[8px] md:text-[10px] font-black uppercase tracking-widest text-slate-500">
                <a href="#" class="hover:text-orange-600 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-orange-600 transition-colors">Terms of Service</a>
                <span class="cursor-default">© 2026 All Rights Reserved</span>
            </div>
        </div>
    </div>
</footer>