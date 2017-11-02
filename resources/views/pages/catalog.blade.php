 @extends('layouts.master')

@section('content')   
         <section class="projects_section">
             <div class="container">
                 <div class="row">
                     
                     <div class="tags">
                          <div class="chip all active">
                            Все
                          </div>
                          <div class="chip iT" id="it">
                            iT
                          </div>
                          <div class="chip adap" id="adap">
                            Адаптивные технологии
                          </div>
                          <div class="chip med" id="med">
                            Медицина
                          </div>
                          <div class="chip neiro" id="neiro">
                            Нейроинтерфейсы
                          </div>
                          <div class="chip obr" id="obr">
                            Образование
                          </div>
                          <div class="chip robo" id="robo">
                            Робототехника
                          </div>
                          <div class="chip stroit" id="stroit">
                            Строительство
                          </div>
                          <div class="chip um" id="um">
                            Умные решения
                          </div>
                          <div class="chip finteh" id="finteh">
                            Финтех
                          </div>
                          <div class="chip eco" id="eco">
                            Экология
                          </div>
                          <div class="chip energ" id="energ">
                            Энергетика
                          </div>
                          <div class="chip other" id="other">
                            Другое
                          </div>
                         
                         
                     </div>
                 </div>
                 <div class="row projects">
                     @foreach ($projects as $project)
                     <div class="col s12 m6 l4 {{ $project->class_add }} project">
                           <div class="card">
                            <div class="card-image waves-effect waves-block waves-light cropimg">
                              <img class="activator crop " src="storage/{{ $project -> filename }}">
                            </div>
                            <div class="card-content">
                              <span class="card-title activator card_z">{{$project->name}}</span>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title card_z1"><i class="fa fa-window-close right" aria-hidden="true"></i></span>
                              <span class="card-title card_z1">{{$project->name}}</span>
                              <p class="p21">{{$project->opis}}</p>
                              <p><a href="/soloproject{{$project->id}}" class="btn btn6">Кнопка перейти</a></p>

                    <script type="text/javascript">
                    document.write(VK.Share.button({
                      url: 'http://new-inno-laravel-j000king.c9users.io/soloproject{{$project->id}}',
                      title: '{{$project->name}}',
                      image: 'https://new-inno-laravel-j000king.c9users.io/storage/{{ $project -> filename }}',
                    },
                    {type: 'custom', text: '<i class="try fa fa-vk" aria-hidden="true"></i>'}));
                    </script>
                    
                    <a href="https://twitter.com/share?url=https://new-inno-laravel-j000king.c9users.io/soloproject{{$project->id}}"
   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
   target="_blank"><i class="fa try fa-twitter" aria-hidden="true"></i></a>
                    <a href="http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=https://new-inno-laravel-j000king.c9users.io/soloproject{{$project->id}}&amp;p[images][0]=http://i.stack.imgur.com/jAH7T.png&amp;p[title]=Creating Custom share buttons: Facebook, Twitter, Google+&amp;p[summary]=Build your custom share buttons from normal images with examples on each button"
   onclick="javascript:window.open(this.href, '', 'scrollbars=yes,height=300,width=600');return false;"
   target="_blank"><i class="fa try fa-facebook" aria-hidden="true"></i></a>
                            </div>
                          </div>
                     </div>
                     @endforeach
          
                 </div>
  
             </div>
         </section>
         
    @endsection