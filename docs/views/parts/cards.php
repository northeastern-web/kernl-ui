<!--
card
__link
__graphic
__graphic__img
__header
__column
__body
__icon
__title
list-group
__footer
__column
__footer__link
--overlay
--outline
--middle
--bottom
--dark
--tile
+list-group
+badge
+scroll
+icon
+round

figure out --middle with a heading.

-->

<section class="section k_bg-light">
  <div class="row">

    <div class="col --6@sm --4@lg --2@xl">
      <article class="card --tile">
        <a href="#" class="__link">
          <div class="__body">
            <h2 class="__title">Tile Card</h2>
            <p>Basic card with tile variant. Fromage airedale halloumi. Cheeseburger port-salut cheesy grin gouda monterey jack cheese and wine swiss squirty cheese.</p>
            <p>Basic card with tile variant. Fromage airedale halloumi. Cheeseburger port-salut cheesy grin gouda monterey jack cheese and wine swiss squirty cheese.</p>
          </div>
        </a>
      </article>
    </div>

    <div class="col --6@sm --4@lg --2@xl">
      <article class="card --tile bc--teal shadow--none">
        <a href="#" class="__link">
          <div class="__body">
            <h2 class="__title">Outlined Tile Card</h2>
            <p>Fromage airedale halloumi. Cheeseburger port-salut cheesy grin gouda monterey jack cheese and wine swiss squirty cheese.</p>
          </div>
        </a>
      </article>
    </div>

    <div class="col --6@sm --4@lg --2@xl">
      <article class="card --tile ta--c">
        <a href="#" class="__link">
          <div class="__graphic +round"></div>
          <div class="__body">
            <h2 class="__title">Little Round Thumb</h2>
            <p>Cheesy grin gouda with some swiss and a dry red.</p>
          </div>
        </a>
      </article>
    </div>

    <div class="col --6@sm --4@lg --2@xl">
      <article class="card --tile --overlay --middle">
        <a href="#" class="__link">
          <div class="__graphic"></div>
          <div class="__body">
            <i class="__icon icon--inbox"></i>
            <h2 class="__title">Overlay Tile</h2>
            <p>Using font icon, not SVG</p>
          </div>
        </a>
      </article>
    </div>

    <div class="col --6@sm --4@lg --2@xl">
      <article class="card --tile">
        <div class="__header">
          <div class="__column">
            Heading Out
            <div class="badge --right --dark">Badge</div>
          </div>
        </div>
        <div class="__body">
          <h2 class="__title">No Tile Like the Present</h2>
          <p>How much can we really cram into just this tiny tile?</p>
        </div>
        <footer class="__footer">
          <a href="#" class="__footer__link bg--teal">
            <div class="__column">Clique Moi</div>
          </a>
        </footer>
      </article>
    </div>

    <div class="col --6@sm --4@lg --2@xl">
      <article class="card --tile --teal --middle">
        <a href="#" class="__link">
          <div class="__body">
            <i class="__icon --thin --lg" data-feather="command"></i>
            <h2 class="__title">Large, Thin SVG Icon</h2>
            <p>Sed posuere consectetur est at lobortis.</p>
          </div>
        </a>
      </article>
    </div>

    <!-- Basic cards -->

    <div class="col --6@sm --3@lg">
      <article class="card">
        <a href="#" class="__link">
          <div class="__body">
            <p>Basic card with no frills. Fromage airedale halloumi. Cheeseburger port-salut cheesy grin gouda monterey jack cheese and wine swiss squirty cheese.</p>
          </div>
        </a>
      </article>
    </div>

    <div class="col --6@sm --3@lg">
      <article class="card bc--gray shadow--none">
        <a href="#" class="__link">
          <div class="__body">
            <h2 class="__title">Goat Cheese on Toast Taleggio Cheeseburger Chalk and Swiss Feta Cheese</h2>
            <p>Manchego stinking bishop fromage say cheese stinking bishop emmental the big cheese cheesy grin.</p>
          </div>
        </a>
      </article>
    </div>

    <div class="col --6@sm --3@lg">
      <article class="card">
        <a href="" class="__link">
          <div class="badge --right --dark">Badge</div>
          <div class="__graphic"></div>
          <div class="__body">
            <h2 class="__title">Fromage Airedale Halloumi</h2>
            <p>Sausage roll manky muck about Essex; collywobbles bossy-britches absobloodylootely, gallivanting around their crumpets.</p>
          </div>
        </a>
      </article>
    </div>

    <div class="col --6@sm --3@lg">
      <article class="card">
        <a href="#" class="__link">
          <div class="__header">
            <div class="__column">
              Head Cheese
            </div>
            <div class="__column">
              Col 2
            </div>
          </div>
          <div class="__body">
            <h2 class="__title">Cheeseball Covered Title</h2>
            <p>Croque monsieur stilton cauliflower cheese dolcelatte ricotta cheese slices rubber cheese caerphilly.</p>
          </div>
        </a>
      </article>
    </div>

    <div class="col --6@sm --4@lg">
      <article class="card --overlay --bottom +shade">
        <a href="#" class="__link">
          <div class="__graphic"></div>
          <div class="__body">
            <h2 class="__title">Fromage Airedale Halloumi</h2>
            <p>Fromage airedale halloumi. Cheeseburger port-salut cheesy grin gouda monterey jack cheese and wine swiss squirty cheese.</p>
          </div>
        </a>
      </article>
    </div>

    <div class="col --6@sm --4@lg">
      <article class="card --overlay">
        <div class="__graphic"></div>
        <div class="__header">
          <div class="__column">
            This Header is Just Super
          </div>
          <div class="__column">
            Col 2
          </div>
        </div>
        <div class="__body">
          <h2 class="__title">Taleggio Cheeseburger Chalk and Swiss Feta Cheese</h2>
          <p>Manchego stinking bishop fromage say cheese stinking bishop emmental the big cheese cheesy grin.</p>
          <a class="btn bc--white" href="#">Have a Clickity</a>
        </div>
      </article>
    </div>

    <div class="col --4@lg">
      <article class="card --overlay --bottom">
        <a href="" class="__link">
          <div class="__graphic"></div>
          <div class="__body">
            <div class="__pretitle">The World is My Pre-Title</div>
            <h2 class="__title">Fromage Airedale Halloumi</h2>
            <p>Some dignified shambles have the fuzz pigeons in Trafalgar Square.</p>
            <ul class="list-group">
              <li class="__item">Lorem ipsum dolor sit amet do eiusmod</li>
              <li class="__item">Lorem dolor sit amet, consectetur</li>
              <li class="__item">Maecenas faucibus mollis interdum</li>
            </ul>
          </div>
        </a>
      </article>
    </div>

    <div class="col --6@lg">
      <article class="card --h@sm">
        <a href="#" class="__link">
          <div class="__graphic"></div>
          <div class="__body">
            <h2 class="__title">Horizontal @ Small</h2>
            <p>Fromage airedale halloumi. Cheeseburger port-salut cheesy grin gouda monterey jack cheese and wine swiss squirty cheese.</p>
          </div>
        </a>
      </article>
    </div>

    <div class="col --6@lg">
      <article class="card --overlay">
        <div class="__graphic"></div>
        <div class="__header">
          <div class="__column">
            This Header is Just Super
          </div>
          <div class="__column">
            Col 2
          </div>
        </div>
        <div class="__body">
          <h2 class="__title">String Cheese Six-Pack</h2>
          <p>Manchego stinking bishop fromage say cheese stinking bishop emmental the big cheese cheesy grin.</p>
          <a class="btn bc--white" href="#">Have a Clickity</a>
        </div>
      </article>
    </div>

    <div class="col --5@lg">
      <article class="card --h@sm">
        <a href="#" class="__link">
          <div class="__graphic"></div>
          <div class="__body">
            <h2 class="__title">Five Columns at Large</h2>
            <p>Fromage airedale halloumi. Cheeseburger port-salut cheesy grin gouda monterey jack cheese and wine swiss squirty cheese.</p>
          </div>
        </a>
      </article>
    </div>

    <div class="col --7@lg">
      <article class="card --overlay">
        <div class="__graphic"></div>
        <div class="__header">
          <div class="__column">
            This Header is Just Super
          </div>
          <div class="__column">
            Col 2
          </div>
        </div>
        <div class="__body">
          <h2 class="__title">Seven Columns at Large</h2>
          <p>Manchego stinking bishop fromage say cheese stinking bishop emmental the big cheese cheesy grin.</p>
          <a class="btn bc--white" href="#">Have a Clickity</a>
        </div>
      </article>
    </div>

    <div class="col --4@lg">
      <article class="card --h@sm --v@lg">
        <a href="#" class="__link">
          <div class="__graphic"></div>
          <div class="__header">
            <div class="__column">
              Lorem Header Ipsum
            </div>
            <div class="__column">
              Col 2
            </div>
          </div>
          <div class="__body">
            <h2 class="__title">Four Columns at Large</h2>
            <p>Fromage airedale halloumi. Cheeseburger port-salut cheesy grin gouda monterey jack cheese and wine swiss squirty cheese.</p>
          </div>
        </a>
      </article>
    </div>

    <div class="col --8@lg">
      <article class="card --h@sm bg--blue-dark">
        <div class="__graphic"></div>
        <div class="__header">
          <div class="__column">
            Lorem Header Ipsum
          </div>
          <div class="__column">
            Col 2
          </div>
        </div>
        <div class="__body">
          <h2 class="__title">Eight Columns at Large</h2>
          <p>Manchego stinking bishop fromage say cheese stinking bishop emmental the big cheese cheesy grin.</p>
          <a class="btn bc--white" href="#">Have a Clickity</a>
        </div>
      </article>
    </div>

    <div class="col --4@lg">
      <article class="card --overlay">
        <a href="#" class="__link">
          <div class="__graphic"></div>
          <div class="__header">
            <div class="__column">
              Lorem Header Ipsum
            </div>
            <div class="__column">
              Col 2
            </div>
          </div>
          <div class="__body">
            <h2 class="__title">Four Columns at Large</h2>
            <p>Fromage airedale halloumi. Cheeseburger port-salut cheesy grin gouda monterey jack cheese and wine swiss squirty cheese.</p>
          </div>
        </a>
      </article>
    </div>

    <div class="col --8@lg">
      <article class="card --overlay">
        <div class="__graphic"></div>
        <div class="__header">
          <div class="__column">
            Lorem Header Ipsum
          </div>
        </div>
        <div class="__body">
          <h2 class="__title">Eight Columns at Large</h2>
          <p>Manchego stinking bishop fromage say cheese stinking bishop emmental the big cheese cheesy grin.</p>
          <a class="btn bc--white" href="#">Have a Clickity</a>
        </div>
      </article>
    </div>

  </div>
</section>

<section class="section --flush --nogutters py--0@xs">
  <article class="card --h@md bg--blue-dark mb--0@xs shadow--none">
    <div class="__graphic"></div>
    <div class="__body">
      <blockquote class="--mark">
        Default blockquote says lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
        <footer cite="http://www.washingtonpost.com/">
          <cite>
            <b>Person Name</b>
            <br><i>Washington Post</i>
          </cite>
        </footer>
      </blockquote>
    </div>
  </article>

  <article class="card --h@md bg--blue-dark --right shadow--none">
    <div class="__graphic"></div>
    <div class="__body">
      <blockquote class="--mark">
        Default blockquote says lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
        <footer cite="http://www.washingtonpost.com/">
          <cite>
            <b>Person Name</b>
            <br><i>Washington Post</i>
          </cite>
        </footer>
      </blockquote>
    </div>
  </article>
</section>
