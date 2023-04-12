<ul>
@foreach ($tasks as $index=>$task )
       {{--<li>{{++$index}}</li>--}}
        <li><a href="contact/{{$task->item}}">{{$task->itemcategory}}</a></li>
        @endforeach
    </ul>
