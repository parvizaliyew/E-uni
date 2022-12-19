@extends('front.layouts.master')

@section('title')
    E-Uni
@endsection

@section('lang')
@include('front.layouts.lang')
@endsection

@section('content')

    <!--Home Start-->
    <section id="page-head">
        <img src="{{ asset('front/') }}/./img/history-bg.png" alt="">
        <div class="head-bg"></div>
        <div class="background">
            <div class="container">
                <div class="row">
                    <h1 class="page-head-text">
                        BA Programs ASOIU
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!--Home End-->
    <!--Pages Start-->
    <div id="pages">
        <div class="container">
            <ul class="pages">
                <li class="page-item">
                    <a href="{{ route('history.'.app()->getLocale()) }}">
                        History
                    </a>
                </li>
                <li class="page-item">
                    <a href="{{ route('about.'.app()->getLocale()) }}">
                        About BA Programs
                    </a>
                </li>
                <li class="page-item">
                    <a href="{{ route('lid_heyet.'.app()->getLocale()) }}">
                        Leadership & Staff
                    </a>
                </li>
                <li class="page-item active">
                    <a href="{{ route('akra.'.app()->getLocale()) }}">
                        Accreditation
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--Pages End-->
    <!--Little Page Start-->
    <section id="little-pages">
        <div class="container">
            <div class="row">
                <ul class="little-pages">
                    <li class="little-item active">
                        <a href="javascript:void(0)">
                            Bachelor degree
                        </a>
                    </li>
                    <li class="little-item">
                        <a href="javascript:void(0)">
                            Master degree
                        </a>
                    </li>
                    <li class="little-item">
                        <a href="javascript:void(0)">
                            PhD
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Little Page End-->
    <!--Bachelor Start-->
    <section id="bachelor">
        <div class="container">
            <div class="row">
                <div class="bachelor-text">
                    <p class="about-body">
                        In 2001 a significant event took place in the life of Azerbaijan State Oil Academy. In December
                        of the same year, the agreement on the “Preparation of bachelor's with New Technologies”
                        Partnership Program was signed by the authorities of two educational institutions - Siegen
                        University (ZU) of German Federative Republic and Azerbaijan State Oil and Industry University
                    </p>
                    <p class="about-body">
                        To prepare qualified specialists with fundamental and applied knowledge in engineering economy
                        and management, to create an opportunity for them work in governmental and non-governmental
                        enterprises
                    </p>
                    <p class="about-body">
                        According to decision from the 9th of January 1997 of Cabinet of Ministers of AR About the list
                        of specialities and directions of the Higher and Secondary Education to confer bachelor degree
                        to the graduates mastered the whole program
                    </p>
                    <p class="about-body">
                        To raise the level of professor-lecturer staff, retrain them and improve knowledge and
                        experience of administrative workers and auxiliary staff for bachelor preparing on business
                        management and mechatronics specialities
                    </p>
                    <p class="about-body">
                        Professor lecturer staff of ZU and ASOIU to carry out together scientific research works on
                        business engineering, mechatronics problems meeting update international requirements, apply
                        investigation results in education systems and publish them in the advanced scientific press
                    </p>
                </div>
                <div class="about-blocks">
                    <div class="about-head">
                        Graduates conferred bachelor degrees have to carry out the following requirements:
                    </div>
                    <div class="leader-block leader-block-2">
                        <div class="thumb-text">
                            <h3 class="about-little-head">
                                I. Requirements on the preparation of bachelors.
                            </h3>
                            <p class="thumb-body">
                                They have to apply knowledge and skills gained on the directions and specialities of the
                                education program in various fields of the intellectual activity
                            </p>
                            <p class="thumb-body">
                                They have to master the humanities and the social-economic subjects of the education
                                program, apply gained knowledge in various fields of business and social activity,
                                investigate programs of social-economic significance
                            </p>
                            <p class="thumb-body">
                                They have to solve standard on non-standard tasks on the speciality of the
                                methodological basis of scientific thinking and business education direction
                            </p>
                            <p class="thumb-body">
                                They have to work in the fields of the gained speciality according to their business
                                education
                            </p>
                        </div>
                        <div class="about-images">
                            <div class="bg-big"></div>
                            <div class="about-bg-1"></div>
                            <div class="about-bg-2"></div>
                            <div class="about-bg-3"></div>
                            <img class="about-img-1" src="{{ asset('front/') }}/./img/about-1.png" alt="">
                        </div>
                    </div>
                    <div class="leader-block">
                        <div class="about-images">
                            <div class="bg-big"></div>
                            <div class="about-bg-1"></div>
                            <div class="about-bg-2"></div>
                            <div class="about-bg-3"></div>
                            <img class="about-img-1" src="{{ asset('front/') }}/./img/about-1.png" alt="">
                        </div>
                        <div class="thumb-text">
                            <h3 class="about-little-head">
                                II. For students, admission to the Program
                            </h3>
                            <p class="thumb-body">
                                Students admitted to the Program is carried out according to the laws of Azerbaijan
                                Republic
                            </p>
                            <p class="thumb-body">
                                Student’s reinstatement, their transfer from other educational institutions academic
                                leave, mastering the second speciality are carried out according to the laws of
                                Azerbaijan Republic
                            </p>
                            <p class="thumb-body">
                                Citizens of foreign countries can also admit the Program
                            </p>
                            <p class="thumb-body">
                                Preparatory courses can be organised for those interested in admitting the Program
                            </p>
                            <p class="thumb-body">
                                Training is carried out on the Paying off basis Students admit has been carried out on
                                Business Engineering” (Machine building field) and it will also be carried out on other
                                specialities in future
                            </p>
                        </div>
                    </div>
                    <div class="leader-block leader-block-2">
                        <div class="thumb-text">
                            <h3 class="about-little-head">
                                III.Training Process Form
                            </h3>
                            <p class="thumb-body">
                                Training on the Program is carried out according to the standards of Ministry of
                                Education of the Azerbaijan Republic taking into account training characteristics of
                                Siegen University
                            </p>
                            <p class="thumb-body">
                                The subjects taught on the program have been chosen according to the curriculum
                            </p>
                            <p class="thumb-body">
                                Daytime training is carried out in Azerbaijan and mainly in English
                            </p>
                            <p class="thumb-body">
                                Training term is 4 years
                            </p>
                            <p class="thumb-body">
                                Lessons are carried out in the classrooms equipped with computers and audio-visual
                                facilities. The program has the library for students use and it is always renewed
                            </p>
                        </div>
                        <div class="about-images">
                            <div class="bg-big"></div>
                            <div class="about-bg-1"></div>
                            <div class="about-bg-2"></div>
                            <div class="about-bg-3"></div>
                            <img class="about-img-1" src="{{ asset('front/') }}/./img/about-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="download-block">
                    @foreach ($bachs as $item)
                    <a href="{{ route('degre-files.download',$item->id) }}">
                        {{ $item->translate('name') }}
                    </a>
                    @endforeach
 
                </div>
            </div>
        </div>
    </section>
    <!--Bachelor End-->
    <!--Master Start-->
    <section id="master-degree" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="bachelor-text">
                    <p class="about-body">
                        The “MASTER OF BUSINESS ADMINISTRATION (MBA)” PROGRAM was founded in 1998 based on the joint
                        project “Partnership to Develop the Master of Business Administration Program and Faculty
                        capabilities” between the Azerbaijan State Oil Academy (now Azerbaijan State Oil and Industry
                        University) and Georgia State University of USA
                    </p>
                    <p class="about-body">
                        Since there is a considerable need for specialists in business administration, the MBA Program
                        at the Azerbaijan State Oil and Industry University, in partnership with Georgia State
                        University (GSU), has been established
                    </p>
                    <p class="about-body">
                        Drawing on their theoretical and practical experience the faculty from GSU provided the
                        necessary assistance and support in the preparation and delivery of the courses. Their expert
                        consultations assured teaching quality
                    </p>
                    <p class="about-body">
                        The MBA Program has rich technical facilities such as computer labs and lecturing rooms equipped
                        with modern computer and audio/video tools
                    </p>
                    <p class="about-body">
                        The students, faculty, and staff have access to library resources organized on the basis of
                        American standards. Library materials, with frequent support from our GSU partners, are
                        constantly upgraded
                    </p>
                </div>
                <div class="img-block">
                    <img src="{{ asset('front/') }}/./img/master-1.png" alt="">
                </div>
                <div class="part-text-block">
                    <div class="part-text">
                        <p class="about-body">
                            The Program is designed to comprehensively study 20 disciplines. These cover the basic
                            principles of any selected major:
                        </p>
                        <p class="about-body">
                            Since its inception, the MBA Program has gained wide popularity and there are many students
                            who seek entry to it
                        </p>
                        <p class="about-body">
                            The student’s motivation may be characterized as purposefulness, highly motivated with a
                            desire for a successful career. As the analysis has shown approximately 35% of our students
                            have natural sciences education, 30 % from humanitarian disciplines and 30% have an
                            economical education. Almost all of them work in large companies and hold middle and higher
                            managerial positions. Some students deal with entrepreneurship activity in spheres of small
                            and medium businesses
                        </p>
                    </div>
                    <div class="part-text">
                        <p class="about-body">
                            The MBA Program specializes in teaching business models and concepts that can be immediately
                            adapted to the “real world” of business. It is designed to provide knowledge and skills in
                            management, economics, finance, statistics, accounting, computer information systems, and
                            various other areas of business. The MBA degree is necessary for those pursuing a management
                            career in a complex and challenging business environment. Now at least two years of
                            experience is a mandatory requirement for admittance to the MBA programs
                        </p>
                    </div>
                </div>
                <div class="img-block">
                    <img src="{{ asset('front/') }}/./img/master-2.png" alt="">
                </div>
                <div class="part-text-block">
                    <div class="part-text">
                        <p class="about-body">
                            The Program is designed to comprehensively study 20 disciplines. These cover the basic
                            principles of any selected major:
                        </p>
                        <p class="about-body">
                            Since its inception, the MBA Program has gained wide popularity and there are many students
                            who seek entry to it
                        </p>
                        <p class="about-body">
                            The student’s motivation may be characterized as purposefulness, highly motivated with a
                            desire for a successful career. As the analysis has shown approximately 35% of our students
                            have natural sciences education, 30 % from humanitarian disciplines and 30% have an
                            economical education. Almost all of them work in large companies and hold middle and higher
                            managerial positions. Some students deal with entrepreneurship activity in spheres of small
                            and medium businesses
                        </p>
                    </div>
                    <div class="part-text">
                        <p class="about-body">
                            The MBA Program specializes in teaching business models and concepts that can be immediately
                            adapted to the “real world” of business. It is designed to provide knowledge and skills in
                            management, economics, finance, statistics, accounting, computer information systems, and
                            various other areas of business. The MBA degree is necessary for those pursuing a management
                            career in a complex and challenging business environment. Now at least two years of
                            experience is a mandatory requirement for admittance to the MBA programs
                        </p>
                    </div>
                </div>
                <div class="download-block">
                    @foreach ($masts as $item)
                    <a href="{{ route('degre-files.download',$item->id) }}">
                        {{ $item->translate('name') }}
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--Master End-->
    <!--Phd Start-->
    <section id="phd" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="bachelor-text">
                    <p class="about-body">
                        The “MASTER OF BUSINESS ADMINISTRATION (MBA)” PROGRAM was founded in 1998 based on the joint
                        project “Partnership to Develop the Master of Business Administration Program and Faculty
                        capabilities” between the Azerbaijan State Oil Academy (now Azerbaijan State Oil and Industry
                        University) and Georgia State University of USA
                    </p>
                    <p class="about-body">
                        Since there is a considerable need for specialists in business administration, the MBA Program
                        at the Azerbaijan State Oil and Industry University, in partnership with Georgia State
                        University (GSU), has been established
                    </p>
                    <p class="about-body">
                        Drawing on their theoretical and practical experience the faculty from GSU provided the
                        necessary assistance and support in the preparation and delivery of the courses. Their expert
                        consultations assured teaching quality
                    </p>
                    <p class="about-body">
                        The MBA Program has rich technical facilities such as computer labs and lecturing rooms equipped
                        with modern computer and audio/video tools
                    </p>
                    <p class="about-body">
                        The students, faculty, and staff have access to library resources organized on the basis of
                        American standards. Library materials, with frequent support from our GSU partners, are
                        constantly upgraded
                    </p>
                </div>
                <div class="img-block">
                    <img src="{{ asset('front/') }}/./img/phd.png" alt="">
                </div>
                <div class="part-text-block">
                    <div class="part-text">
                        <p class="about-body">
                            The Program is designed to comprehensively study 20 disciplines. These cover the basic
                            principles of any selected major:
                        </p>
                        <p class="about-body">
                            Since its inception, the MBA Program has gained wide popularity and there are many students
                            who seek entry to it
                        </p>
                        <p class="about-body">
                            The student’s motivation may be characterized as purposefulness, highly motivated with a
                            desire for a successful career. As the analysis has shown approximately 35% of our students
                            have natural sciences education, 30 % from humanitarian disciplines and 30% have an
                            economical education. Almost all of them work in large companies and hold middle and higher
                            managerial positions. Some students deal with entrepreneurship activity in spheres of small
                            and medium businesses
                        </p>
                    </div>
                    <div class="part-text">
                        <p class="about-body">
                            The MBA Program specializes in teaching business models and concepts that can be immediately
                            adapted to the “real world” of business. It is designed to provide knowledge and skills in
                            management, economics, finance, statistics, accounting, computer information systems, and
                            various other areas of business. The MBA degree is necessary for those pursuing a management
                            career in a complex and challenging business environment. Now at least two years of
                            experience is a mandatory requirement for admittance to the MBA programs
                        </p>
                    </div>
                </div>
                <div class="phd-about">
                    <h2 class="about-head">
                        Learning objectives
                    </h2>
                    <p class="about-body">
                        Graduates of PhD program in business administration will possess in-depth and systematic
                        knowledge and relevant skills in business administration field
                    </p>
                    <p class="about-body">
                        Doctorate students will develop the following competences and general skills, as well as skills
                        and knowledge related to specific subjects:
                    </p>
                    <h3 class="about-little-head">
                        Knowledge and Understanding
                    </h3>
                    <p class="about-body">
                        Evidence-based contemporary knowledge that allows revisiting and improving current status of
                        knowledge, or applying innovative methods (in line with requirements for peer-reviewed
                        manuscripts); understand new frameworks that emerge after revisiting and renewing current
                        knowledge
                    </p>
                    <p class="about-body">
                        Critical appraisal of scientific literature
                    </p>
                    <p class="about-body">
                        Capacity to analyze business institutions
                    </p>
                    <p class="about-body">
                        Study origins of managerial theory and its development
                    </p>
                    <h3 class="about-little-head">
                        Practical Application of Knowledge
                    </h3>
                    <p class="about-body">
                        Plan, implement and supervise innovative research studies; develop innovative research,
                        analytical methods and approaches that are oriented to create new knowledge and can be published
                        in international peer-reviewed journals
                    </p>
                    <p class="about-body">
                        Knowledge and ability to collect data and to use innovative analytical methods
                    </p>
                    <p class="about-body">
                        Skills to conduct research independently
                    </p>
                    <p class="about-body">
                        Determine connection among organizational behavior variables and analyze them
                    </p>
                    <p class="about-body">
                        Conduct scientific research relevant to the field of study
                    </p>
                    <p class="about-body">
                        Apply managerial concepts to business practice
                    </p>
                    <h3 class="about-little-head">
                        Analytical Skills
                    </h3>
                    <p class="about-body">
                        Critical appraisal, analysis and synthesis of new, complex and controversial ideas and
                        approaches that create a basis for development of new methodologies; independently identify
                        right and effective solutions for problems
                    </p>
                    <p class="about-body">
                        Data analysis and synthesis skills
                    </p>
                    <p class="about-body">
                        Strategic planning and decision-making skills
                    </p>
                    <p class="about-body">
                        Cognitive skills
                    </p>
                    <p class="about-body">
                        Skills to synthesis different theories in the field.
                    </p>
                    <h3 class="about-little-head">
                        Communication Skills
                    </h3>
                    <p class="about-body">
                        Present and link new information with existing knowledge clearly and argumentatively;
                        participate in thematic discussion with local or international scientific communities.
                    </p>
                    <p class="about-body">
                        Be a part of a research team
                    </p>
                    <p class="about-body">
                        Teaching and pedagogical skills
                    </p>
                    <p class="about-body">
                        Leadership skills
                    </p>
                    <p class="about-body">
                        Skills for appraisal of scientific works and formulation of relevant recommendations.
                    </p>
                    <h3 class="about-little-head">
                        Learning Skills
                    </h3>
                    <p class="about-body">
                        Readiness to develop new ideas and processes based on contemporary achievements and knowledge for teaching, work and research.
                    </p>
                    <p class="about-body">
                        Study and use innovative methods for data collection and analysis
                    </p>
                    <p class="about-body">
                        Prepare and publish scientific manuscripts
                    </p>
                    <p class="about-body">
                        Skills to conduct large-scale business studies
                    </p>
                    <p class="about-body">
                        Study, critically apprise and use models in the field of management in research activities.
                    </p>
                    <h3 class="about-little-head">
                        Values
                    </h3>
                    <p class="about-body">
                        Study and develop innovative approaches for establishing values
                    </p>
                    <p class="about-body">
                        Skills to internalize, study, teach and promote ethical standards and apply them at their scientific work.
                    </p>
                    <p class="about-body">
                        Skills to internalize, study, teach and promote social corporate responsibility principles and apply them at their scientific
                    </p>
                </div>
                <div class="download-block">

                   @foreach ($phd as $item)
                   <a href="{{ route('degre-files.download',$item->id) }}">
                    {{ $item->translate('name') }}
                </a>
                   @endforeach
                  
                </div>
            </div>
        </div>
    </section>
    <!--Phd End-->
   
@endsection