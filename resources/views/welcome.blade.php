<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mark Aducal | BSIT Student &amp; Web Developer</title>
  <meta name="description" content="Mark Aducal — 4th-year BSIT student at Gordon College, full-stack web developer specialising in Laravel, Angular, and MySQL. Open to OJT and internship opportunities." />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,400&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

  {{-- ══════════════════════════════════════════════════════════
       NAVBAR
  ══════════════════════════════════════════════════════════ --}}
  <nav id="navbar"
       class="fixed top-0 left-0 right-0 z-50 py-4
              transition-all duration-300">
    <div class="max-w-6xl mx-auto px-6 flex items-center justify-between">

      {{-- Logo --}}
      <a href="#" class="font-mono text-lg font-medium tracking-tight"
         style="color: var(--text-primary);">
        mark<span style="color: var(--accent);">.</span>aducal
      </a>

      {{-- Desktop nav links --}}
      <ul class="hidden md:flex items-center gap-8 list-none">
        @foreach(['about'=>'About','skills'=>'Skills','projects'=>'Projects','education'=>'Education','contact'=>'Contact'] as $id=>$label)
        <li>
          <a href="#{{ $id }}"
             class="text-sm font-medium relative transition-colors duration-200
                    after:absolute after:bottom-[-3px] after:left-0 after:right-0
                    after:h-[1.5px] after:bg-[var(--accent)] after:scale-x-0
                    after:transition-transform after:duration-200 after:origin-left
                    hover:after:scale-x-100"
             style="color: var(--text-secondary);"
             onmouseenter="this.style.color='var(--text-primary)'"
             onmouseleave="this.style.color='var(--text-secondary)'">
            {{ $label }}
          </a>
        </li>
        @endforeach
      </ul>

      <div class="flex items-center gap-3">
        {{-- Theme toggle --}}
        <button id="themeToggle" aria-label="Toggle theme"
                class="w-[38px] h-[38px] rounded-lg flex items-center justify-center
                       text-sm cursor-pointer transition-all duration-200
                       border border-[var(--border)]"
                style="background: var(--bg-card); color: var(--text-secondary);"
                onmouseenter="this.style.borderColor='var(--accent)';this.style.color='var(--accent)';this.style.background='var(--accent-dim)'"
                onmouseleave="this.style.borderColor='var(--border)';this.style.color='var(--text-secondary)';this.style.background='var(--bg-card)'">
          <i id="themeIcon" class="fa-solid fa-moon"></i>
        </button>

        {{-- Hamburger --}}
        <button id="hamburger" aria-label="Open menu"
                class="md:hidden flex flex-col gap-[5px] cursor-pointer p-1">
          <span class="bar1 block w-6 h-[2px] rounded transition-all duration-200"
                style="background: var(--text-primary);"></span>
          <span class="bar2 block w-6 h-[2px] rounded transition-all duration-200"
                style="background: var(--text-primary);"></span>
          <span class="bar3 block w-6 h-[2px] rounded transition-all duration-200"
                style="background: var(--text-primary);"></span>
        </button>
      </div>
    </div>
  </nav>

  {{-- Mobile nav --}}
  <div id="navMobile"
       class="hidden fixed top-[70px] left-0 right-0 z-40 flex-col gap-5
              px-6 py-6 border-b border-[var(--border)]"
       style="background: var(--bg-secondary);">
    @foreach(['about'=>'About','skills'=>'Skills','projects'=>'Projects','education'=>'Education','contact'=>'Contact'] as $id=>$label)
      <a href="#{{ $id }}" onclick="closeMobileNav()"
         class="text-[1.05rem] font-medium" style="color: var(--text-secondary);">
        {{ $label }}
      </a>
    @endforeach
  </div>


  {{-- ══════════════════════════════════════════════════════════
       HERO
  ══════════════════════════════════════════════════════════ --}}
  <section id="home"
           class="hero-grid relative min-h-screen flex items-center overflow-hidden">
    <div class="max-w-6xl mx-auto px-6 relative z-10 pt-20 w-full">
      <div>
        {{-- Badge --}}
        <div class="anim-fade-down inline-flex items-center gap-2 px-4 py-1.5
                    rounded-full text-xs font-mono mb-6
                    border border-[var(--border-hover)]"
             style="background: var(--accent-dim); color: var(--accent);">
          <i class="fa-solid fa-circle text-[8px]" style="color:#22c55e;"></i>
          Available for OJT &amp; Internships
        </div>

        {{-- Name --}}
        <h1 class="anim-fade-up-1 font-heading font-extrabold tracking-tight
                   leading-[1.05] mb-3"
            style="font-size: clamp(2.8rem,7vw,5rem); color: var(--text-primary);">
          Hi, I'm<br />
          <span style="color: var(--accent);">Mark Aducal.</span>
        </h1>

        {{-- Typing --}}
        <div class="anim-fade-up-2 font-mono mb-6"
             style="font-size: clamp(1rem,2.5vw,1.25rem);
                    color: var(--text-secondary); min-height: 1.8em;">
          <span id="typingText"></span><span class="cursor"></span>
        </div>

        {{-- Intro --}}
        <p class="anim-fade-up-3 text-[1.1rem] max-w-[520px] mb-10"
           style="color: var(--text-secondary);">
          A 4th-year BSIT student at Gordon College, building real-world web systems
          with a focus on clean code, scalable backends, and intuitive user experiences.
        </p>

        {{-- CTA --}}
        <div class="anim-fade-up-4 flex flex-wrap gap-4">
          <a href="#projects"
             class="inline-flex items-center gap-2 px-7 py-3 rounded-lg
                    font-medium text-[0.95rem] text-white cursor-pointer
                    transition-all duration-200 bg-[var(--accent)]
                    hover:-translate-y-0.5 hover:brightness-110
                    hover:shadow-[0_8px_24px_var(--accent-glow)]">
            <i class="fa-solid fa-code"></i> View Projects
          </a>
          <a href="#contact"
             class="inline-flex items-center gap-2 px-7 py-3 rounded-lg
                    font-medium text-[0.95rem] cursor-pointer transition-all duration-200
                    border border-[var(--border)]
                    hover:border-[var(--accent)] hover:-translate-y-0.5
                    hover:shadow-sm"
             style="color: var(--text-primary);"
             onmouseenter="this.style.color='var(--accent)';this.style.background='var(--accent-dim)'"
             onmouseleave="this.style.color='var(--text-primary)';this.style.background='transparent'">
            <i class="fa-solid fa-paper-plane"></i> Contact Me
          </a>
        </div>
      </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="anim-fade-up-5 absolute bottom-10 left-1/2 -translate-x-1/2
                flex flex-col items-center gap-1 font-mono text-xs"
         style="color: var(--text-muted);">
      <div class="w-[22px] h-[34px] border border-[var(--text-muted)] rounded-full
                  flex justify-center pt-1.5">
        <div class="scroll-dot w-1 h-1 rounded-full"
             style="background: var(--text-muted);"></div>
      </div>
      scroll
    </div>
  </section>


  {{-- ══════════════════════════════════════════════════════════
       ABOUT
  ══════════════════════════════════════════════════════════ --}}
  <section id="about" class="py-24">
    <div class="max-w-6xl mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">

        {{-- Avatar --}}
        <div class="fade-up flex justify-center">
          <div class="bracket-wrap w-[260px] h-[260px] rounded-[20px]
                      flex items-center justify-center text-[5rem] z-10"
               style="background: var(--bg-card); border: 1px solid var(--border);">
            👨‍💻
          </div>
        </div>

        {{-- Text --}}
        <div class="fade-up" style="transition-delay: 0.1s">
          <p class="section-label-line font-mono text-xs uppercase tracking-widest mb-3"
             style="color: var(--accent);">About Me</p>
          <h2 class="font-heading font-bold mb-6"
              style="font-size: clamp(1.8rem,4vw,2.6rem); color: var(--text-primary);">
            Building things for<br />the web &amp; beyond.
          </h2>

          <p class="mb-4 text-[0.97rem]" style="color: var(--text-secondary);">
            I'm Mark Aducal, a 4th-year BSIT student at Gordon College in Olongapo City.
            Currently on OJT as a web developer, I enjoy designing systems that solve real
            problems — from barangay-level platforms to full-stack booking systems.
          </p>
          <p class="mb-4 text-[0.97rem]" style="color: var(--text-secondary);">
            My journey started with curiosity about how websites work. Now I spend my days
            writing PHP backends, crafting Angular frontends, and debugging the occasional
            N+1 query at 2AM. Outside code, I care deeply about UI/UX — because
            good-looking software should also be a joy to use.
          </p>

          <div class="flex flex-wrap gap-2 mt-6">
            @foreach([
              ['fa-globe','Web Development'],
              ['fa-layer-group','System Development'],
              ['fa-palette','UI/UX Design'],
              ['fa-database','Database Design'],
              ['fa-mobile-screen','Mobile-First Design'],
            ] as [$icon,$label])
            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg
                         text-xs font-medium border border-[var(--border-hover)]"
                  style="background: var(--accent-dim); color: var(--accent);">
              <i class="fa-solid {{ $icon }}"></i> {{ $label }}
            </span>
            @endforeach
          </div>
        </div>

      </div>
    </div>
  </section>


  {{-- ══════════════════════════════════════════════════════════
       SKILLS
  ══════════════════════════════════════════════════════════ --}}
  <section id="skills" class="py-24" style="background: var(--bg-secondary);">
    <div class="max-w-6xl mx-auto px-6">

      <div class="fade-up mb-14">
        <p class="section-label-line font-mono text-xs uppercase tracking-widest mb-3"
           style="color: var(--accent);">Tech Stack</p>
        <h2 class="font-heading font-bold mb-3"
            style="font-size: clamp(1.8rem,4vw,2.6rem); color: var(--text-primary);">
          Skills &amp; Technologies
        </h2>
        <p class="text-[1.05rem] max-w-[520px]"
           style="color: var(--text-secondary);">
          Tools and languages I work with regularly, from frontend to backend
          and everything in between.
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6">

        @php
        $skillGroups = [
          ['icon'=>'fa-paintbrush','title'=>'Frontend','skills'=>[
            ['HTML / CSS',90],['JavaScript',78],['Angular',72],
          ]],
          ['icon'=>'fa-server','title'=>'Backend','skills'=>[
            ['Laravel (PHP)',85],['Node.js',65],['Django (Python)',55],
          ]],
          ['icon'=>'fa-database','title'=>'Database','skills'=>[
            ['MySQL',82],['MongoDB',60],['Eloquent ORM',80],
          ]],
          ['icon'=>'fa-wrench','title'=>'Tools & Others','skills'=>[
            ['Git / GitHub',80],['REST API Design',78],['UI/UX (Figma)',68],
          ]],
        ];
        @endphp

        @foreach($skillGroups as $i => $group)
        <div class="skill-card fade-up rounded-[14px] p-7 border border-[var(--border)]
                    transition-all duration-200 hover:-translate-y-1
                    hover:border-[var(--border-hover)] hover:shadow-[var(--shadow-card)]"
             style="background: var(--bg-card); --i: {{ $i }};">

          <div class="flex items-center gap-3 mb-6">
            <div class="w-10 h-10 rounded-lg flex items-center justify-center
                        text-[1.1rem]"
                 style="background: var(--accent-dim); color: var(--accent);">
              <i class="fa-solid {{ $group['icon'] }}"></i>
            </div>
            <span class="text-[0.95rem] font-semibold"
                  style="color: var(--text-primary);">{{ $group['title'] }}</span>
          </div>

          @foreach($group['skills'] as [$name,$pct])
          <div class="mb-4 last:mb-0">
            <div class="flex justify-between items-center mb-1.5">
              <span class="text-[0.88rem]" style="color: var(--text-secondary);">{{ $name }}</span>
              <span class="font-mono text-[0.78rem]" style="color: var(--accent);">{{ $pct }}%</span>
            </div>
            <div class="h-[5px] rounded-full overflow-hidden"
                 style="background: var(--bg-secondary);">
              <div class="progress-fill" data-width="{{ $pct }}"></div>
            </div>
          </div>
          @endforeach

        </div>
        @endforeach

      </div>
    </div>
  </section>


  {{-- ══════════════════════════════════════════════════════════
       PROJECTS
  ══════════════════════════════════════════════════════════ --}}
  <section id="projects" class="py-24">
    <div class="max-w-6xl mx-auto px-6">

      <div class="fade-up mb-14">
        <p class="section-label-line font-mono text-xs uppercase tracking-widest mb-3"
           style="color: var(--accent);">Work</p>
        <h2 class="font-heading font-bold mb-3"
            style="font-size: clamp(1.8rem,4vw,2.6rem); color: var(--text-primary);">
          Featured Projects
        </h2>
        <p class="text-[1.05rem] max-w-[520px]"
           style="color: var(--text-secondary);">
          Real systems I've designed and built — from complaint management to
          automated car wash bookings.
        </p>
      </div>

      @php
      $projects = [
        [
          'icon'       => 'fa-store',
          'title'      => 'LeydiBoss',
          'desc'       => 'A capstone web system for LeydiBoss Online built with Angular, PHP, and MySQL, focused on smooth customer experience and practical business operations.',
          'tech'       => ['Angular', 'PHP', 'MySQL'],
          'live_url'   => 'https://leydiboss.online',
          'github_url' => 'https://github.com/MARKADUCAL/capstone',
        ],
      ];
      @endphp

      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
        @foreach($projects as $i => $proj)
        <div class="project-card fade-up flex flex-col gap-4 rounded-[14px] p-7
                    border border-[var(--border)] transition-all duration-200
                    hover:-translate-y-1.5 hover:border-[var(--border-hover)]
                    hover:shadow-[var(--shadow)]"
             style="background: var(--bg-card); --i: {{ $i }};"
             onmouseenter="this.style.background='var(--bg-card-hover)'"
             onmouseleave="this.style.background='var(--bg-card)'">

          {{-- Header --}}
          <div class="flex items-start justify-between">
            <div class="w-11 h-11 rounded-lg flex items-center justify-center
                        text-xl flex-shrink-0"
                 style="background: var(--accent-dim); color: var(--accent);">
              <i class="fa-solid {{ $proj['icon'] }}"></i>
            </div>
            <div class="flex gap-2">
              <a href="{{ $proj['live_url'] }}" target="_blank"
                 class="w-8 h-8 rounded-lg flex items-center justify-center
                        text-[0.85rem] border border-[var(--border)]
                        transition-all duration-200 hover:border-[var(--accent)]"
                 style="background: var(--bg-secondary); color: var(--text-secondary);"
                 title="Live Demo"
                 onmouseenter="this.style.color='var(--accent)';this.style.background='var(--accent-dim)'"
                 onmouseleave="this.style.color='var(--text-secondary)';this.style.background='var(--bg-secondary)'">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
              </a>
              <a href="{{ $proj['github_url'] }}" target="_blank"
                 class="w-8 h-8 rounded-lg flex items-center justify-center
                        text-[0.85rem] border border-[var(--border)]
                        transition-all duration-200 hover:border-[var(--accent)]"
                 style="background: var(--bg-secondary); color: var(--text-secondary);"
                 title="GitHub"
                 onmouseenter="this.style.color='var(--accent)';this.style.background='var(--accent-dim)'"
                 onmouseleave="this.style.color='var(--text-secondary)';this.style.background='var(--bg-secondary)'">
                <i class="fa-brands fa-github"></i>
              </a>
            </div>
          </div>

          <h3 class="text-[1.15rem] font-bold" style="color: var(--text-primary);">
            {{ $proj['title'] }}
          </h3>

          <p class="text-[0.9rem] leading-[1.65] flex-1"
             style="color: var(--text-secondary);">
            {{ $proj['desc'] }}
          </p>

          <div class="flex flex-wrap gap-1.5">
            @foreach($proj['tech'] as $t)
            <span class="font-mono text-[0.75rem] px-2.5 py-0.5 rounded-lg
                         border border-[var(--border)]"
                  style="background: var(--bg-secondary); color: var(--text-muted);">
              {{ $t }}
            </span>
            @endforeach
          </div>

          <div class="flex gap-3 mt-auto pt-1">
            <a href="{{ $proj['live_url'] }}" target="_blank"
               class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg
                      text-[0.85rem] font-medium text-white transition-all duration-200
                      bg-[var(--accent)] hover:brightness-110 hover:-translate-y-0.5">
              <i class="fa-solid fa-eye"></i> Live Demo
            </a>
            <a href="{{ $proj['github_url'] }}" target="_blank"
               class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg
                      text-[0.85rem] font-medium border border-[var(--border)]
                      transition-all duration-200 hover:border-[var(--border-hover)]
                      hover:-translate-y-0.5"
               style="background: var(--bg-secondary); color: var(--text-secondary);"
               onmouseenter="this.style.color='var(--text-primary)'"
               onmouseleave="this.style.color='var(--text-secondary)'">
              <i class="fa-brands fa-github"></i> GitHub
            </a>
          </div>

        </div>
        @endforeach
      </div>

    </div>
  </section>


  {{-- ══════════════════════════════════════════════════════════
       EDUCATION & EXPERIENCE
  ══════════════════════════════════════════════════════════ --}}
  <section id="education" class="py-24" style="background: var(--bg-secondary);">
    <div class="max-w-6xl mx-auto px-6">

      <div class="fade-up mb-14">
        <p class="section-label-line font-mono text-xs uppercase tracking-widest mb-3"
           style="color: var(--accent);">Background</p>
        <h2 class="font-heading font-bold mb-3"
            style="font-size: clamp(1.8rem,4vw,2.6rem); color: var(--text-primary);">
          Education &amp; Experience
        </h2>
        <p class="text-[1.05rem] max-w-[520px]"
           style="color: var(--text-secondary);">
          My academic journey and hands-on development experience.
        </p>
      </div>

      @php
      $timeline = [
        [
          'period' => '2025 — Present',
          'title'  => 'Web Developer Intern (OJT)',
          'org'    => 'On-the-Job Training · Olongapo City',
          'desc'   => 'Working as a full-stack web developer intern — building REST APIs with Laravel Sanctum, designing Angular frontends, writing feature tests with PestPHP, and handling database relationships using Eloquent ORM. Working on real client projects including a client profiling system for Relevare Skincare Boutique Salon Spa.',
          'tags'   => ['Laravel','Angular','PestPHP','MySQL'],
        ],
        [
          'period' => '2022 — Present',
          'title'  => 'Bachelor of Science in Information Technology',
          'org'    => 'Gordon College · Olongapo City, Philippines',
          'desc'   => 'Currently in 4th year. Relevant coursework: Web Systems & Technologies, Database Management Systems, Systems Analysis & Design, Software Engineering, Information Assurance & Security, and Application Development. Capstone project: Angular-powered web application with Laravel backend.',
          'tags'   => ['4th Year','BSIT','Capstone'],
        ],
        [
          'period' => 'Academic Highlights',
          'title'  => 'Key Technical Courses & Projects',
          'org'    => 'Gordon College Curriculum',
          'desc'   => 'Completed project-based coursework in: full-stack web development, relational database design, REST API architecture, UI/UX prototyping, and agile project management. Participated in UAT planning, usability testing design, and technical documentation for capstone system deliverables.',
          'tags'   => ['Full-Stack','Agile','UAT','API Design'],
        ],
      ];
      @endphp

      <div class="fade-up relative pl-10 max-w-[680px]" style="max-width: 680px;">
        <div class="timeline-line"></div>

        @foreach($timeline as $item)
        <div class="relative mb-10 last:mb-0">
          <div class="timeline-dot"></div>
          <div class="font-mono text-[0.75rem] mb-1" style="color: var(--accent);">
            {{ $item['period'] }}
          </div>
          <div class="text-[1.1rem] font-bold mb-0.5"
               style="color: var(--text-primary);">{{ $item['title'] }}</div>
          <div class="text-[0.9rem] mb-3"
               style="color: var(--text-secondary);">{{ $item['org'] }}</div>
          <div class="text-[0.88rem] leading-[1.7]"
               style="color: var(--text-secondary);">{{ $item['desc'] }}</div>
          <div class="flex flex-wrap gap-1.5 mt-3">
            @foreach($item['tags'] as $tag)
            <span class="inline-flex items-center px-3 py-1 rounded-lg
                         text-xs font-medium border border-[var(--border-hover)]"
                  style="background: var(--accent-dim); color: var(--accent);">
              {{ $tag }}
            </span>
            @endforeach
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>


  {{-- ══════════════════════════════════════════════════════════
       CONTACT
  ══════════════════════════════════════════════════════════ --}}
  <section id="contact" class="py-24">
    <div class="max-w-6xl mx-auto px-6">

      <div class="fade-up mb-14">
        <p class="section-label-line font-mono text-xs uppercase tracking-widest mb-3"
           style="color: var(--accent);">Get In Touch</p>
        <h2 class="font-heading font-bold mb-3"
            style="font-size: clamp(1.8rem,4vw,2.6rem); color: var(--text-primary);">
          Let's Work Together
        </h2>
        <p class="text-[1.05rem] max-w-[520px]"
           style="color: var(--text-secondary);">
          Open to collaboration, freelance projects, and OJT opportunities.
          Don't hesitate to reach out!
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.4fr] gap-16 items-start">

        {{-- Contact info --}}
        <div class="fade-up">
          <h3 class="font-heading font-bold text-[1.5rem] mb-4"
              style="color: var(--text-primary);">Contact Info</h3>
          <p class="text-[0.97rem] mb-8" style="color: var(--text-secondary);">
            Whether you have a project in mind or just want to connect —
            my inbox is always open.
          </p>

          @php
          $contacts = [
            ['href'=>'mailto:aducalremegio03@gmail.com','icon'=>'fa-envelope','label'=>'Email','value'=>'aducalremegio03@gmail.com','fa'=>'solid'],
            ['href'=>'http://github.com/MARKYYY03','icon'=>'fa-github','label'=>'GitHub','value'=>'github.com/markaducal','fa'=>'brands'],
            ['href'=>'https://www.linkedin.com/in/mark-aducal-9b952025b/','icon'=>'fa-linkedin-in','label'=>'LinkedIn','value'=>'linkedin.com/in/markaducal','fa'=>'brands'],
            ['href'=>'#','icon'=>'fa-location-dot','label'=>'Location','value'=>'Olongapo City, Philippines 🇵🇭','fa'=>'solid'],
          ];
          @endphp

          <div class="flex flex-col gap-3">
            @foreach($contacts as $c)
            <a href="{{ $c['href'] }}" @if(!str_starts_with($c['href'],'mailto')) target="_blank" @endif
               class="flex items-center gap-4 px-5 py-4 rounded-[14px]
                      border border-[var(--border)] transition-all duration-200
                      hover:border-[var(--border-hover)] hover:translate-x-1"
               style="background: var(--bg-card); color: var(--text-primary);"
               onmouseenter="this.style.background='var(--bg-card-hover)'"
               onmouseleave="this.style.background='var(--bg-card)'">
              <div class="w-[38px] h-[38px] rounded-lg flex items-center
                          justify-center text-[1rem] flex-shrink-0"
                   style="background: var(--accent-dim); color: var(--accent);">
                <i class="fa-{{ $c['fa'] }} {{ $c['icon'] }}"></i>
              </div>
              <div>
                <div class="text-[0.78rem]" style="color: var(--text-muted);">{{ $c['label'] }}</div>
                <div class="text-[0.9rem] font-medium">{{ $c['value'] }}</div>
              </div>
            </a>
            @endforeach
          </div>
        </div>

        {{-- Contact form --}}
        <div class="fade-up rounded-[14px] p-8 border border-[var(--border)]"
             style="background: var(--bg-card); transition-delay: 0.1s">

          <div id="formFields">
            @php
            $fields = [
              ['id'=>'fname','type'=>'text','label'=>'Your Name','placeholder'=>'Juan dela Cruz'],
              ['id'=>'femail','type'=>'email','label'=>'Email Address','placeholder'=>'juan@email.com'],
              ['id'=>'fsubject','type'=>'text','label'=>'Subject','placeholder'=>'Project Collaboration'],
            ];
            @endphp

            @foreach($fields as $f)
            <div class="mb-5">
              <label for="{{ $f['id'] }}"
                     class="block text-[0.83rem] font-medium mb-1.5"
                     style="color: var(--text-secondary);">{{ $f['label'] }}</label>
              <input type="{{ $f['type'] }}" id="{{ $f['id'] }}"
                     placeholder="{{ $f['placeholder'] }}"
                     class="w-full rounded-lg px-4 py-[0.7rem] text-[0.92rem]
                            border border-[var(--border)] outline-none
                            transition-all duration-200
                            focus:border-[var(--accent)]
                            focus:shadow-[0_0_0_3px_var(--accent-dim)]"
                     style="background: var(--bg-secondary);
                            color: var(--text-primary);
                            font-family: inherit;" />
            </div>
            @endforeach

            <div class="mb-5">
              <label for="fmessage" class="block text-[0.83rem] font-medium mb-1.5"
                     style="color: var(--text-secondary);">Message</label>
              <textarea id="fmessage" rows="5" placeholder="Tell me about your project..."
                        class="w-full rounded-lg px-4 py-[0.7rem] text-[0.92rem]
                               border border-[var(--border)] outline-none resize-none
                               transition-all duration-200
                               focus:border-[var(--accent)]
                               focus:shadow-[0_0_0_3px_var(--accent-dim)]"
                        style="background: var(--bg-secondary);
                               color: var(--text-primary);
                               font-family: inherit;"></textarea>
            </div>

            <button onclick="handleFormSubmit()"
                    class="w-full flex items-center justify-center gap-2
                           px-6 py-3 rounded-lg font-medium text-[0.95rem]
                           text-white cursor-pointer transition-all duration-200
                           bg-[var(--accent)] hover:brightness-110
                           hover:-translate-y-0.5
                           hover:shadow-[0_8px_24px_var(--accent-glow)]">
              <i class="fa-solid fa-paper-plane"></i> Send Message
            </button>
          </div>

          <div id="formSuccess" class="form-success text-center py-6"
               style="color: var(--accent);">
            <i class="fa-solid fa-circle-check text-[2.5rem] block mb-4"></i>
            <strong class="text-lg">Message sent! 🎉</strong><br />
            <span class="text-[0.9rem]" style="color: var(--text-secondary);">
              I'll get back to you within 24 hours.
            </span>
          </div>

        </div>
      </div>
    </div>
  </section>


  {{-- ══════════════════════════════════════════════════════════
       FOOTER
  ══════════════════════════════════════════════════════════ --}}
  <footer class="py-10 border-t border-[var(--border)] text-center">
    <div class="max-w-6xl mx-auto px-6">
      <p class="font-mono text-[0.8rem]" style="color: var(--text-muted);">
        Designed &amp; built by
        <a href="#home" style="color: var(--accent);">Mark Aducal</a>
        · BSIT @ Gordon College ·
        <span id="year"></span>
      </p>
      <p class="font-mono text-[0.75rem] mt-2" style="color: var(--text-muted);">
        Built with Laravel, Tailwind CSS &amp; JavaScript ❤️
      </p>
    </div>
  </footer>


  {{-- ══════════════════════════════════════════════════════════
       JAVASCRIPT
  ══════════════════════════════════════════════════════════ --}}
  <script>
    // --- Year ---
    document.getElementById('year').textContent = new Date().getFullYear();

    // --- Theme toggle ---
    const htmlEl    = document.documentElement;
    const toggleBtn = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');

    const saved = localStorage.getItem('portfolio-theme') || 'dark';
    applyTheme(saved);

    toggleBtn.addEventListener('click', () => {
      const next = htmlEl.dataset.theme === 'dark' ? 'light' : 'dark';
      applyTheme(next);
      localStorage.setItem('portfolio-theme', next);
    });

    function applyTheme(theme) {
      htmlEl.dataset.theme = theme;
      themeIcon.className = theme === 'dark' ? 'fa-solid fa-sun' : 'fa-solid fa-moon';
      toggleBtn.title = theme === 'dark' ? 'Switch to Light Mode' : 'Switch to Dark Mode';
    }

    // --- Navbar scroll ---
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
      navbar.classList.toggle('navbar-scrolled', window.scrollY > 40);
    }, { passive: true });

    // --- Hamburger ---
    const hamburger = document.getElementById('hamburger');
    const navMobile = document.getElementById('navMobile');

    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('hamburger-open');
      navMobile.classList.toggle('hidden');
      navMobile.classList.toggle('flex');
    });

    function closeMobileNav() {
      hamburger.classList.remove('hamburger-open');
      navMobile.classList.add('hidden');
      navMobile.classList.remove('flex');
    }

    // --- Typing effect ---
    const phrases = [
      'BSIT Student @ Gordon College',
      'Full-Stack Web Developer',
      'Laravel & Angular Enthusiast',
      'Building for the Real World',
    ];
    let pIdx = 0, cIdx = 0, deleting = false;
    const typingEl = document.getElementById('typingText');

    function type() {
      const phrase = phrases[pIdx];
      if (!deleting) {
        typingEl.textContent = phrase.slice(0, ++cIdx);
        if (cIdx === phrase.length) {
          deleting = true;
          setTimeout(type, 1600);
          return;
        }
      } else {
        typingEl.textContent = phrase.slice(0, --cIdx);
        if (cIdx === 0) {
          deleting = false;
          pIdx = (pIdx + 1) % phrases.length;
        }
      }
      setTimeout(type, deleting ? 45 : 75);
    }
    setTimeout(type, 800);

    // --- Intersection observer — fade-up & progress bars ---
    const fadeEls = document.querySelectorAll('.fade-up');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          entry.target.querySelectorAll('.progress-fill[data-width]').forEach(bar => {
            bar.style.width = bar.dataset.width + '%';
          });
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    fadeEls.forEach(el => observer.observe(el));

    // Also watch skill cards independently
    const skillObs = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.querySelectorAll('.progress-fill[data-width]').forEach(bar => {
            bar.style.width = bar.dataset.width + '%';
          });
          skillObs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });

    document.querySelectorAll('.skill-card').forEach(c => skillObs.observe(c));

    // --- Contact form mock submit ---
    function handleFormSubmit() {
      const name    = document.getElementById('fname').value.trim();
      const email   = document.getElementById('femail').value.trim();
      const message = document.getElementById('fmessage').value.trim();
      if (!name || !email || !message) {
        alert('Please fill in Name, Email, and Message before sending.');
        return;
      }
      document.getElementById('formFields').style.display = 'none';
      const success = document.getElementById('formSuccess');
      success.style.display = 'block';
    }
  </script>

</body>
</html>
