<?php
function listgroup($classes, $option = false)
{
    if (preg_match("/left/", $classes) || preg_match("/right/", $classes)) {
        return '
      <ul class="list-group ' . $classes . '">
        <li class="__item">
          <a href="#"><i data-feather="arrow-right"></i>
          <b>Lorem ipsum dolor</b>: sit amet do eiusmod</a>
        </li>
        <li class="__item">
          <a href="#"><i data-feather="arrow-right"></i>
          <b>Lorem ipsum</b>: dolor sit amet, consectetur faucibus mollis interdum</a>
        </li>
        <li class="__item">
          <a href="#"><i data-feather="arrow-right"></i>
          <b>Maecenas</b>: faucibus mollis interdum</a>
        </li>
        <li class="__item">
          <a href="#"><i data-feather="arrow-right"></i>
          <b>Lorem ipsum</b>: dolor sit amet, consectetur</a>
        </li>
        <li class="__item">
          <a href="#"><i data-feather="arrow-right"></i>
          <b>Lorem ipsum dolor</b>: sit amet do eiusmod</a>
        </li>
      </ul>
      ';
    }

    if ($option == 'excerpt') {
        return '
        <div class="list-group --indent">
            <a class="__item" href="/article/schedule-of-classes/">
                <h6 class="mb--0">Schedule of Classes</h6>
                <div class="__excerpt tc--gray-600 fs--xs pr--1@xs"> A listing of available class sections by term.</div>
            </a>
            <a class="__item" href="/article/semester-class-sequence-schedules/">
                <h6 class="mb--0">Semester Class Sequence Schedules</h6>
                <div class="__excerpt tc--gray-600 fs--xs pr--1@xs"> Diagrams and conflict tables of semester class sequences</div>
            </a>
            <a class="__item" href="/article/course-class-offerings/">
                <h6 class="mb--0">Course and Class Offerings</h6>
                <div class="__excerpt tc--gray-600 fs--xs pr--1@xs"> Distinction between course and class offerings.</div>
            </a>
            <a class="__item" href="/article/no-charge-music-ensemble-courses/">
                <h6 class="mb--0">No-Charge Music Ensemble Courses</h6>
                <div class="__excerpt tc--gray-600 fs--xs pr--1@xs"> Music ensemble courses available for undergraduate students to take without added charge.</div>
            </a>
            <a class="__item" href="/article/college-of-professional-studies-undergraduate-semester-conversion/">
                <h6 class="mb--0">College of Professional Studies—Undergraduate Semester Conversion</h6>
                <div class="__excerpt tc--gray-600 fs--xs pr--1@xs"> Effective fall 2016, the undergraduate programs in the College of Professional Studies are offered on a semester basis. </div>
            </a>
        </div>
        ';
    }

    return '
    <div class="list-group ' . $classes . '">
      <div class="__item"><b>Lorem ipsum dolor</b>: sit amet do eiusmod</div>
      <div class="__item"><b>Lorem ipsum</b>: dolor sit amet, consectetur faucibus mollis interdum</div>
      <a href="#" class="__item"><b>Maecenas</b>: faucibus mollis interdum</a>
      <a href="#" class="__item"><b>Lorem ipsum</b>: dolor sit amet, consectetur</a>
      <div class="__item"><b>Lorem ipsum dolor</b>: sit amet do eiusmod</div>
    </div>
    ';
}
