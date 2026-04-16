<section id="about" class="py-24">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="fade-up flex justify-center">
                <div class="bracket-wrap w-[260px] h-[260px] rounded-[20px] flex items-center justify-center text-[5rem] z-10"
                    style="background: var(--bg-card); border: 1px solid var(--border);">
                    👨‍💻
                </div>
            </div>

            <div class="fade-up" style="transition-delay: 0.1s">
                <p class="section-label-line font-mono text-xs uppercase tracking-widest mb-3"
                    style="color: var(--accent);">About Me</p>
                <h2 class="font-heading font-bold mb-6"
                    style="font-size: clamp(1.8rem,4vw,2.6rem); color: var(--text-primary);">
                    Building things for<br />the web &amp; beyond.
                </h2>

                <p class="mb-4 text-[0.97rem]" style="color: var(--text-secondary);">
                    I'm Mark Aducal, a 4th-year BSIT student at Gordon College in Olongapo City. Currently on OJT as a
                    web developer, I enjoy designing systems that solve real problems.
                </p>
                <p class="mb-4 text-[0.97rem]" style="color: var(--text-secondary);">
I specialize in Laravel for backend development and have experience with Angular for frontend development from my capstone project. I am currently completing my OJT, where I use Laravel as a full-stack framework, developing web applications using Blade for the frontend and focusing on clean, scalable solutions.                </p>

                <div class="flex flex-wrap gap-2 mt-6">
                    @foreach ([['fa-globe', 'Web Development'], ['fa-layer-group', 'System Development'], ['fa-palette', 'UI/UX Design'], ['fa-database', 'Database Design']] as [$icon, $label])
                        <span
                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-medium border border-[var(--border-hover)]"
                            style="background: var(--accent-dim); color: var(--accent);">
                            <i class="fa-solid {{ $icon }}"></i> {{ $label }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
