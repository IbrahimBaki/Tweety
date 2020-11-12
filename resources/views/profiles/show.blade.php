@extends('layouts.app')

@section('content')

        <header class="mb-6 relative">
            <img
                src="/images/bay1.jpg"
                style="width:100%;height:223px;border-radius: 20px"
                class="mb-2">


            <div class="flex justify-between items-center mb-4">
                <div>
                    <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
                    <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
                </div>

                <div class="flex">
                    <a href="" class=" rounded-full  py-2 px-4 text-black text-xs border border-gray-300 mr-2">Edit Profile</a>
                    <form method="POST" action="/profile/{{$user->id}}/follow">
                        <button
                            type="submit"
                            class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">

                          {{auth()->user()->isFollowing($user) ? 'Unfollow Me' : 'Follow Me'}}
                        </button>
                    </form>

                </div>
            </div>
                <p class="text-sm">seem to answer something very deep in our nature as if, for the duration of its telling,
                                    something special has been created, some essence of our experience extrapolated, some
                                    temporary sense has been made of our common, turbulent journey towards the grave and oblivion</p>

                <img src="{{$user->avatar}}"
                     alt=""
                     class="rounded-full mr-2 absolute "
                     style="width: 150px;left:calc(50% - 75px);top:138px;">




        </header>




    @include('_timeline',['tweets'=>$user->tweets])


@endsection
