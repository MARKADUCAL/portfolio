<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 py-4 transition-all duration-300">
  <div class="max-w-6xl mx-auto px-6 flex items-center justify-between">
    <a href="#" class="font-mono text-lg font-medium tracking-tight" style="color: var(--text-primary);">
      mark<span style="color: var(--accent);">.</span>aducal
    </a>

    <ul class="hidden md:flex items-center gap-8 list-none">
      @foreach(['about'=>'About','skills'=>'Skills','projects'=>'Projects','education'=>'Education','contact'=>'Contact'] as $id=>$label)
      <li>
        <a href="#{{ $id }}" class="text-sm font-medium relative transition-colors duration-200 after:absolute after:bottom-[-3px] after:left-0 after:right-0 after:h-[1.5px] after:bg-[var(--accent)] after:scale-x-0 after:transition-transform after:duration-200 after:origin-left hover:after:scale-x-100" style="color: var(--text-secondary);" onmouseenter="this.style.color='var(--text-primary)'" onmouseleave="this.style.color='var(--text-secondary)'">
          {{ $label }}
        </a>
      </li>
      @endforeach
    </ul>

    <div class="flex items-center gap-3">
      <button id="themeToggle" aria-label="Toggle theme" class="w-[38px] h-[38px] rounded-lg flex items-center justify-center text-sm cursor-pointer transition-all duration-200 border border-[var(--border)]" style="background: var(--bg-card); color: var(--text-secondary);" onmouseenter="this.style.borderColor='var(--accent)';this.style.color='var(--accent)';this.style.background='var(--accent-dim)'" onmouseleave="this.style.borderColor='var(--border)';this.style.color='var(--text-secondary)';this.style.background='var(--bg-card)'">
        <i id="themeIcon" class="fa-solid fa-moon"></i>
      </button>

      <button id="hamburger" aria-label="Open menu" class="md:hidden flex flex-col gap-[5px] cursor-pointer p-1">
        <span class="bar1 block w-6 h-[2px] rounded transition-all duration-200" style="background: var(--text-primary);"></span>
        <span class="bar2 block w-6 h-[2px] rounded transition-all duration-200" style="background: var(--text-primary);"></span>
        <span class="bar3 block w-6 h-[2px] rounded transition-all duration-200" style="background: var(--text-primary);"></span>
      </button>
    </div>
  </div>
</nav>

<div id="navMobile" class="hidden fixed top-[70px] left-0 right-0 z-40 flex-col gap-5 px-6 py-6 border-b border-[var(--border)]" style="background: var(--bg-secondary);">
  @foreach(['about'=>'About','skills'=>'Skills','projects'=>'Projects','education'=>'Education','contact'=>'Contact'] as $id=>$label)
    <a href="#{{ $id }}" onclick="closeMobileNav()" class="text-[1.05rem] font-medium" style="color: var(--text-secondary);">
      {{ $label }}
    </a>
  @endforeach
</div>
