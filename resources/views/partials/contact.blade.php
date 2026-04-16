<section id="contact" class="py-24">
  <div class="max-w-6xl mx-auto px-6">
    <div class="fade-up mb-14">
      <p class="section-label-line font-mono text-xs uppercase tracking-widest mb-3" style="color: var(--accent);">Get In Touch</p>
      <h2 class="font-heading font-bold mb-3" style="font-size: clamp(1.8rem,4vw,2.6rem); color: var(--text-primary);">Let's Work Together</h2>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.4fr] gap-16 items-start">
      <div class="fade-up">
        @php
        $contacts = [
          ['href'=>'mailto:aducalremegio03@gmail.com','icon'=>'fa-envelope','label'=>'Email','value'=>'aducalremegio03@gmail.com','fa'=>'solid'],
          ['href'=>'http://github.com/MARKYYY03','icon'=>'fa-github','label'=>'GitHub','value'=>'github.com/markaducal','fa'=>'brands'],
          ['href'=>'https://www.linkedin.com/in/mark-aducal-9b952025b/','icon'=>'fa-linkedin-in','label'=>'LinkedIn','value'=>'linkedin.com/in/markaducal','fa'=>'brands'],
        ];
        @endphp
        <div class="flex flex-col gap-3">
          @foreach($contacts as $c)
            <a href="{{ $c['href'] }}" @if(!str_starts_with($c['href'],'mailto')) target="_blank" @endif class="flex items-center gap-4 px-5 py-4 rounded-[14px] border border-[var(--border)] transition-all duration-200 hover:border-[var(--border-hover)] hover:translate-x-1" style="background: var(--bg-card); color: var(--text-primary);">
              <div class="w-[38px] h-[38px] rounded-lg flex items-center justify-center text-[1rem] flex-shrink-0" style="background: var(--accent-dim); color: var(--accent);">
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

      <div class="fade-up rounded-[14px] p-8 border border-[var(--border)]" style="background: var(--bg-card);">
        <div id="formFields">
          <div class="mb-5">
            <label for="fname" class="block text-[0.83rem] font-medium mb-1.5" style="color: var(--text-secondary);">Your Name</label>
            <input type="text" id="fname" placeholder="Juan dela Cruz" class="w-full rounded-lg px-4 py-[0.7rem] text-[0.92rem] border border-[var(--border)] outline-none transition-all duration-200 focus:border-[var(--accent)]" style="background: var(--bg-secondary); color: var(--text-primary);" />
          </div>
          <div class="mb-5">
            <label for="femail" class="block text-[0.83rem] font-medium mb-1.5" style="color: var(--text-secondary);">Email Address</label>
            <input type="email" id="femail" placeholder="juan@email.com" class="w-full rounded-lg px-4 py-[0.7rem] text-[0.92rem] border border-[var(--border)] outline-none transition-all duration-200 focus:border-[var(--accent)]" style="background: var(--bg-secondary); color: var(--text-primary);" />
          </div>
          <div class="mb-5">
            <label for="fmessage" class="block text-[0.83rem] font-medium mb-1.5" style="color: var(--text-secondary);">Message</label>
            <textarea id="fmessage" rows="5" placeholder="Tell me about your project..." class="w-full rounded-lg px-4 py-[0.7rem] text-[0.92rem] border border-[var(--border)] outline-none resize-none transition-all duration-200 focus:border-[var(--accent)]" style="background: var(--bg-secondary); color: var(--text-primary);"></textarea>
          </div>
          <button onclick="handleFormSubmit()" class="w-full flex items-center justify-center gap-2 px-6 py-3 rounded-lg font-medium text-[0.95rem] text-white cursor-pointer transition-all duration-200 bg-[var(--accent)] hover:brightness-110 hover:-translate-y-0.5">
            <i class="fa-solid fa-paper-plane"></i> Send Message
          </button>
        </div>

        <div id="formSuccess" class="form-success text-center py-6" style="color: var(--accent);">
          <i class="fa-solid fa-circle-check text-[2.5rem] block mb-4"></i>
          <strong class="text-lg">Message sent! 🎉</strong>
        </div>
      </div>
    </div>
  </div>
</section>
