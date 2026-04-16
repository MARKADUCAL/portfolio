<section id="education" class="py-24" style="background: var(--bg-secondary);">
  <div class="max-w-6xl mx-auto px-6">
    <div class="fade-up mb-14">
      <p class="section-label-line font-mono text-xs uppercase tracking-widest mb-3" style="color: var(--accent);">Background</p>
      <h2 class="font-heading font-bold mb-3" style="font-size: clamp(1.8rem,4vw,2.6rem); color: var(--text-primary);">Education &amp; Experience</h2>
    </div>

    @php
    $timeline = [
      ['period' => '2025 — Present', 'title' => 'Web Developer Intern (OJT)', 'org' => 'On-the-Job Training · Olongapo City', 'desc' => 'Working as a web developer intern on real client systems and full-stack features.', 'tags' => ['PHP','Angular','MySQL']],
      ['period' => '2022 — Present', 'title' => 'Bachelor of Science in Information Technology', 'org' => 'Gordon College · Olongapo City, Philippines', 'desc' => 'Currently in 4th year with focus on web systems, database design, and software engineering.', 'tags' => ['4th Year','BSIT','Capstone']],
    ];
    @endphp

    <div class="fade-up relative pl-10 max-w-[680px]" style="max-width: 680px;">
      <div class="timeline-line"></div>
      @foreach($timeline as $item)
      <div class="relative mb-10 last:mb-0">
        <div class="timeline-dot"></div>
        <div class="font-mono text-[0.75rem] mb-1" style="color: var(--accent);">{{ $item['period'] }}</div>
        <div class="text-[1.1rem] font-bold mb-0.5" style="color: var(--text-primary);">{{ $item['title'] }}</div>
        <div class="text-[0.9rem] mb-3" style="color: var(--text-secondary);">{{ $item['org'] }}</div>
        <div class="text-[0.88rem] leading-[1.7]" style="color: var(--text-secondary);">{{ $item['desc'] }}</div>
        <div class="flex flex-wrap gap-1.5 mt-3">
          @foreach($item['tags'] as $tag)
            <span class="inline-flex items-center px-3 py-1 rounded-lg text-xs font-medium border border-[var(--border-hover)]" style="background: var(--accent-dim); color: var(--accent);">{{ $tag }}</span>
          @endforeach
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
