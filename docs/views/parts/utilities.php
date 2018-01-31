<section class="section">
  <header class="k_section__header">Spacing</header>
  <p>Add spacing to an element with margin (m), padding (p) and offset (o) utilities.</p>
  <p class="fs--sm"><b>Pattern</b>: <code class="mr--0h@xs">&lt;prefix&gt;&lt;location&gt;--&lt;size&gt;@&lt;breakpoint&gt;</code></p>
  <div class="card --extend mb--1@xs bg--gray-700">
    <div class="__body pb--1@xs">
      <ul class="list--inline fs--sm">
        <li><b>Prefixes</b>:</li>
        <li><code>m</code> <i class="fs--xs">margin</i></li>
        <li><code>p</code> <i class="fs--xs">padding</i></li>
        <li><code>o</code> <i class="fs--xs">offset</i></li>
      </ul>
      <ul class="list--inline fs--sm">
        <li><b>Locations</b>:</li>
        <li><code>t</code> <i class="fs--xs">top</i></li>
        <li><code>r</code> <i class="fs--xs">right</i></li>
        <li><code>b</code> <i class="fs--xs">bottom</i></li>
        <li><code>l</code> <i class="fs--xs">left</i></li>
        <li><code>x</code> <i class="fs--xs">left &amp; right</i></li>
        <li><code>y</code> <i class="fs--xs">top &amp; bottom</i></li>
        <li><code>a</code> <i class="fs--xs">all</i></li>
      </ul>
      <ul class="list--inline mb--0@xs fs--sm">
        <li><b>Sizes</b>:</li>
        <li><code>1</code> through <code>20</code></li>
      </ul>
      <ul class="list--inline ml--4@xs fs--sm">
        <li>Add <code>h</code> for half values. <i>Examples</i>:</li>
        <li><code>0h</code> <i class="fs--xs">0.5 rem</i></li>
        <li><code>3h</code> <i class="fs--xs">3.5 rem</i></li>
        <li><code>12h</code> <i class="fs--xs">12.5 rem</i></li>
      </ul>
      <ul class="list--inline fs--sm mb--0@xs">
        <li><b>Breakpoints</b>: </li>
        <li><code>xs</code></li>
        <li><code>sm</code></li>
        <li><code>md</code></li>
        <li><code>lg</code></li>
        <li><code>xl</code></li>
        <li><code>xx</code></li>
      </ul>
    </div>
  </div>
  <p class="fs--sm"><b>Example</b>: <code>mx--2@md</code> (margin left &amp; right 2rem at the medium breakpoint)</p>
</section>

<section class="section">
  <header class="k_section__header">Positioning</header>
  <div class="row">
    <div class="col --12@xs p--y-2@xs">
      <div class="card --extend mb--1@xs bg--gray-700">
        <div class="__body pb--1@xs">
          <p class="text-style-block">Flexbox Vertical Positioning</p>
          <p>Set vertical positioning on flexbox elements.</p>
          <ul class="fs--sm">
            <li><code>+equal</code> <i>makes all children equal height</i></li>
            <li><code>+middle</code> <i>vertically align to the middle</i></li>
            <li><code>+bottom</code> <i>vertically align to the bottom</i></li>
          </ul>
        </div>
      </div>

      <div class="card --extend mb--1@xs bg--gray-700">
        <div class="__body pb--1@xs">
          <p class="text-style-block">Responsive Floats</p>
          <p>Set floats by breakpoint.</p>
          <ul class="fs--sm">
            <li><code>f--l@md</code> <i>Left: float left at medium breakpoint</i></li>
            <li><code>f--r@md</code> <i>Right: float right at medium breakpoint</i></li>
            <li><code>f--n@md</code> <i>None: kill all floats at medium breakpoint</i></li>
          </ul>
        </div>
      </div>

      <div class="card --extend mb--1@xs bg--gray-700">
        <div class="__body pb--1@xs">
          <p class="text-style-block">Responsive Flexbox Ordering</p>
          <p>Responsively set display order of responsive elements.</p>
          <ul class="fs--sm">
            <li>(default order is defined by markup)</li>
            <li><code>order--1@md</code> <i>overrides element's display order to appear first at the medium breakpoint</i></li>
            <li><code>order--2@md</code> <i>overrides element's display order to appear second at the medium breakpoint</i></li>
            <li><i>etc</i></li>
          </ul>
        </div>
      </div>

      <div class="card --extend mb--1@xs bg--gray-700">
        <div class="__body pb--1@xs">
          <p class="text-style-block">Sticky</p>
          <p>Set an element to be sticky</p>
          <ul class="fs--sm">
            <li><code>--sticky</code></li>
          </ul>
        </div>
      </div>
      <p class="fs--sm"><i>See <a href="./?part=grid">Grid</a> page for visual examples.</i></p>
    </div>
  </div>
</section>
<section class="section">
  <header class="k_section__header">Typography</header>
  <div class="row">
    <div class="col --12@xs p--y-2@xs">
      <ul>
        <li>Font Sizes</li>
        <li>Font Styles and Weights</li>
        <li>List Styles</li>
        <li>Text Alignment</li>
      </ul>
      <p class="fs--sm"><i>See <a href="./?part=typography">Typography</a> page for more examples.</i></p>
    </div>
  </div>
</section>
<section class="section">
  <header class="k_section__header">Color, Images, Shadows</header>
  <div class="row">
    <div class="col --12@xs p--y-2@xs">
      <ul>
        <li>Backgrounds</li>
        <li>Text Color</li>
        <li>Borders</li>
        <li>Shadows</li>
      </ul>
    </div>
  </div>
</section>
