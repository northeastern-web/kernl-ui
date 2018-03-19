<section class="section">
  <header class="k_section__header">Spacing</header>
  <p>Add spacing to an element with margin (m), padding (p) and offset (o) utilities.</p>
  <p class="fs--sm"><b>Pattern</b>: <code class="mr--0h@xs">&lt;prefix&gt;&lt;location&gt;--&lt;size&gt;@&lt;breakpoint&gt;</code></p>
  <div class="pa--1@xs mb--1@xs bc--gray-800">
    <ul class="ls--inline fs--sm mt--0h@xs mb--0h@xs">
      <li><b>Prefixes</b>:</li>
      <li><code>m</code> <i class="fs--xs">margin</i></li>
      <li><code>p</code> <i class="fs--xs">padding</i></li>
      <li><code>o</code> <i class="fs--xs">offset</i></li>
    </ul>
    <hr>
    <ul class="ls--inline fs--sm mb--0h@xs">
      <li><b>Locations</b>:</li>
      <li><code>t</code> <i class="fs--xs">top</i></li>
      <li><code>r</code> <i class="fs--xs">right</i></li>
      <li><code>b</code> <i class="fs--xs">bottom</i></li>
      <li><code>l</code> <i class="fs--xs">left</i></li>
      <li><code>x</code> <i class="fs--xs">left &amp; right</i></li>
      <li><code>y</code> <i class="fs--xs">top &amp; bottom</i></li>
      <li><code>a</code> <i class="fs--xs">all</i></li>
    </ul>
    <hr>
    <ul class="ls--inline mb--0@xs fs--sm">
      <li><b>Sizes</b>:</li>
      <li><code>1</code> through <code>20</code></li>
    </ul>
    <ul class="ls--inline fs--sm ml--4@xs mb--0h@xs">
      <li>Add <code>h</code> for half values. <i>Examples</i>:</li>
      <li><code>0h</code> <i class="fs--xs">0.5 rem</i></li>
      <li><code>3h</code> <i class="fs--xs">3.5 rem</i></li>
      <li><code>12h</code> <i class="fs--xs">12.5 rem</i></li>
    </ul>
    <hr>
    <ul class="ls--inline fs--sm mb--0h@xs">
      <li><b>Breakpoints</b>: </li>
      <li><code>xs</code></li>
      <li><code>sm</code></li>
      <li><code>md</code></li>
      <li><code>lg</code></li>
      <li><code>xl</code></li>
      <li><code>xx</code></li>
    </ul>
  </div>
  <p class="fs--sm"><b>Example a</b>: <code>mx--2@md</code> (margin left &amp; right 2rem at the medium breakpoint)</p>
  <p class="fs--sm"><b>Example b</b>: <code>mt--14h@lg</code> (margin top 14.5rem at the large breakpoint)</p>
</section>

<section class="section">
  <header class="k_section__header">Positioning</header>
  <div class="row">
    <div class="col --12@xs --6@md">
      <div class="pa--1@xs mb--1@xs mb--2@md bc--gray-800">
        <p class="text-style-block">Flexbox Vertical Positioning</p>
        <p>Set vertical positioning on flexbox elements.</p>
        <ul class="fs--sm">
          <li><code>+equal</code> <i>sets element to height of heighest sibling</i></li>
          <li><code>+middle</code> <i>vertically align children to the middle</i></li>
          <li><code>+bottom</code> <i>vertically align children to the bottom</i></li>
        </ul>
      </div>
    </div>

    <div class="col --12@xs --6@md">
      <div class="pa--1@xs mb--1@xs mb--2@md bc--gray-800">
        <p class="text-style-block">Responsive Floats</p>
        <p>Set floats by breakpoint.</p>
        <ul class="fs--sm">
          <li><code>f--l@md</code> <b>Left</b>: <i>float left at medium breakpoint</i></li>
          <li><code>f--r@md</code> <b>Right</b>: <i>float right at medium breakpoint</i></li>
          <li><code>f--n@md</code> <b>None</b>: <i>kill all floats at medium breakpoint</i></li>
        </ul>
      </div>
    </div>

    <div class="col --12@xs --6@md">
      <div class="pa--1@xs mb--1@xs mb--2@md bc--gray-800">
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

    <div class="col --12@xs --6@md">
      <div class="pa--1@xs mb--1@xs mb--2@md bc--gray-800">
        <p class="text-style-block">Sticky</p>
        <p>Set an element to be sticky</p>
        <ul class="fs--sm">
          <li><code>pos--sticky</code></li>
        </ul>
      </div>
    </div>
  </div>
  <p class="fs--sm"><i>See <a href="./?part=grid">Grid</a> page for visual examples.</i></p>
</section>
<section class="section">
  <header class="k_section__header">Typography</header>
  <div class="row">
    <div class="col --12@xs --6@md mb--1@xs mb--2@md">
      <div class="pa--1@xs mb--1@xs bc--gray-800 +equal">
        <p class="text-style-block">Font Sizes</p>
        <p>Override a text element's size with the font-size (fs) utility:</p>
        <ul class="fs--sm">
          <li><code>fs--xs</code> <i>extra small</i></li>
          <li><code>fs--sm</code> <i>small</i></li>
          <li><code>fs--root</code> <i>root size</i></li>
          <li><code>fs--d1</code>&ndash;<code>fs--d7</code> <i>one through seven scale degrees above root</i></li>
        </ul>
        <p class="text-style-block">Font Families</p>
        <p>Override a font family style with font-family (ff) utility:</p>
        <ul class="fs--sm">
          <li><code>ff--sans</code> <i>sans (default)</i>: <span class="ff--sans fs--d1">Sans serif</span></li>
          <li><code>ff--slab</code> <i>slab</i>: <span class="ff--slab fs--d1">Slab</span></li>
          <li><code>ff--serif</code> <i>serif</i>: <span class="ff--serif fs--d1">Serif</span></li>
          <li><code>ff--mono</code> <i>mono</i>: <span class="ff--mono fs--d1">Monospace</span></li>
        </ul>
      </div>
    </div>

    <div class="col --12@xs --6@md mb--1@xs mb--2@md">
      <div class="pa--1@xs mb--1@xs bc--gray-800 +equal">
        <p class="text-style-block">Font Styles and Weights</p>
        <p>Override a text's font style (fs) and/or weight (fw):</p>
        <ul class="fs--sm">
          <li><code>fs--lead</code> <i>applies the &ldquo;lead&ldquo; class</i></li>
          <li><code>fw--100</code>&ndash;<code>fw--900</code> <i>sets font weight to 100 through 900</i></li>
        </ul>
      </div>
    </div>

    <div class="col --12@xs --6@md mb--1@xs mb--2@md">
      <div class="pa--1@xs mb--1@xs bc--gray-800 +equal">
        <p class="text-style-block">List Styles</p>
        <p>Specify a list style with these...</p>
        <ul class="fs--sm">
          <li><code>ls--none</code> <i>makes an unstyled list</i></li>
          <li><code>ls--inline</code> <i>makes an inline list</i></li>
          <li><code>ls--default</code> <i>resets a nested list to bullets when parent list styled is overridden</i></li>
        </ul>
      </div>
    </div>

    <div class="col --12@xs --6@md mb--1@xs mb--2@md">
      <div class="pa--1@xs mb--1@xs bc--gray-800 +equal">
        <p class="text-style-block">Text Alignment</p>
        <p>Override a text element's alignment</p>
        <ul class="fs--sm">
          <li><code>ta--l</code> <i>align left</i></li>
          <li><code>ta--r</code> <i>align right</i></li>
          <li><code>ta--c</code> <i>align center</i></li>
        </ul>
        <p>Optionally add a breakpoint:</p>
        <ul class="fs--sm">
          <li><b>Example</b>: <code>ta--l@md</code> <i>align left at medium screen sizes</i></li>
          <li><b>Example</b>: <code>ta--r@lg</code> <i>align right at large screen sizes</i></li>
        </ul>
      </div>
    </div>
  </div>
  <p class="fs--sm"><i>See <a href="./?part=typography">Typography</a> page for more examples.</i></p>
</section>

<section class="section">
  <header class="k_section__header">Color, Images, Shadows</header>
  <div class="row">
    <div class="col --12@xs">
      <nav class="nav --tabbed --bordered">
        <ul class="__list" role="tablist">
          <li class="__item">
            <a class="__link --active" data-toggle="tab" href="#tab_1" role="tab" aria-expanded="true">Backgrounds</a>
          </li>
          <li class="__item">
            <a class="__link" data-toggle="tab" href="#tab_2" role="tab" aria-expanded="false">Text Color</a>
          </li>
          <li class="__item">
            <a class="__link" data-toggle="tab" href="#tab_3" role="tab" aria-expanded="false">Borders &amp; Corners</a>
          </li>
          <li class="__item +children">
            <a class="__link" data-toggle="tab" href="#tab_4" role="tab" aria-expanded="false">Shadows</a>
          </li>
        </ul>
      </nav>
      <div class="hidden pt--1@xs --active" id="tab_1" role="tabpanel">
        <div class="row">
          <div class="col --12@xs --6@md">
            <h3 class="fs--root text-style-block">Background Image Positions</h3>
            <table class="table --border fs--sm">
              <tr>
                <td><code>bg--lt</code><br><i>left top</i></td>
                <td class="ta--c"><code>bg--t</code><br><i>center top</i></td>
                <td class="ta--r"><code>bg--rt</code><br><i>right top</i></td>
              </tr>
              <tr>
                <td><code>bg--l</code><br><i>left center</i></td>
                <td class="ta--c"><b>default</b>:<br><i>center center</i></td>
                <td class="ta--r"><code>bg--r</code><br><i>right center</i></td>
              </tr>
              <tr>
                <td><code>bg--lb</code><br><i>left bottom</i></td>
                <td class="ta--c"><code>bg--b</code><br><i>center bottom</i></td>
                <td class="ta--r"><code>bg--rb</code><br><i>right bottom</i></td>
              </tr>
            </table>
          </div>
          <div class="col --12@xs --5@md">
            <h3 class="fs--root text-style-block">Background Color</h3>
            <p>Assign a color to a text element (or child text of an element).</p>
            <p class="fs--sm"><b>Pattern</b>: <code class="mr--0h@xs">bg--&lt;color&gt;</code></p>
            <div class="color-cell fs--sm">
              <div class="bg--blue-dark pa--0h@xs"><code>bg--blue-dark</code>: Dark Blue</div>
              <div class="bg--yellow pa--0h@xs"><code>bg--yellow</code>: Yellow</div>
            </div>
            <h3 class="fs--root text-style-block">Other Background Utilities</h3>
            <ul class="fs--sm">
              <li><code>bg--fixed</code>: <i>fixed image background</i></li>
              <li><code>bg--none</code>: <i>remove background completely</i></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="hidden pt--1@xs" id="tab_2" role="tabpanel">
        <h3 class="fs--root text-style-block">Text Color</h3>
        <p>Assign a color to a text element (or child text of an element).</p>
        <p class="fs--sm"><b>Pattern</b>: <code class="mr--0h@xs">tc--&lt;color&gt;</code></p>
        <ul class="fs--sm">
          <li><b>Example a</b>: <code>tc--teal</code> <span class="tc--teal tt--caps"><b>Teal Text</b></span></p>
          <li><b>Example b</b>: <code>tc--red</code> <span class="tc--red tt--caps"><b>Red Text</b></span></p>
        </ul>
        <p class="fs--sm"><i>See <a href="./?part=color-palette">Color Palette</a> page for more examples.</i></p>
      </div>
      <div class="hidden pt--1@xs" id="tab_3" role="tabpanel">
        <h3>Borders &amp; Corners</h3>
        <p>coming soon...</p>
      </div>
      <div class="hidden pt--3@md" id="tab_4" role="tabpanel">
        <h3>Shadows</h3>
        <p>coming soon...</p>
      </div>
    </div>
</section>
