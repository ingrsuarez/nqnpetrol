
<div class="flex flex-col justify-center items-center">
    <h1 class="text-3xl mt-4 py-2 px-4 bg-orange-100 top-0 absolute shadow-md rounded"><a href="{{route('job.chart')}}"> Organigrama</a></h1>
    <div class="container mx-auto text-center pt-24">
        <div class="items-center justify-center flex">
            @isset($job)
            <div class="text-center">
                <div class="flex flex-col justify-center items-center">
                    <div class="w-16">
                        {{-- <img class="block rounded-full m-auto shadow-md bg-gray-300" alt="CEO" --}}
                            {{-- src=""/> --}}
                    </div>
                    <div class="text-gray-600">
                        <form action="{{route('job.view')}}">
                            <input type="hidden" name="job" value="{{$job->id}}">
                            <button class="text-xl font-bold cursor-pointer select-none">{{ucwords($job->name)}}</button>
                        </form>
                        <div class="border-2">
                        @foreach($job->employees as $employee)
                            
                            @if(!empty($employee->user_id))
                            <div class="w-16">
                                <img class="block rounded-full m-auto shadow-md bg-gray-300" alt="CEO" src="{{$employee->user->profile_photo_url}}"/>
                            </div>
                            
                            @endif
                            <p>{{ucwords($employee->name." ".$employee->lastName)}}</p>
                        @endforeach
                        </div>
                           
                        
                    </div>
                </div>

                @include('livewire.childs',['childs' => $job->childs])
                    {{-- <ul class="flex flex-row mt-10 justify-center">
                        <div class="-mt-10 border-l-2 absolute h-10 border-gray-400"></div>

                        <li class="relative p-6">
                            <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                style="left: 50%; right: 0px;"></div>
                            <div class="relative flex justify-center">
                                <div class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0"></div>
                                <div class="text-center">
                                    <div class="flex flex-col justify-center items-center">
                                        <div class="w-16">
                                            <img class="block rounded-full m-auto shadow-md" alt="Leo Six"
                                                src="https://randomuser.me/api/portraits/men/83.jpg" />
                                        </div>
                                        <div class="text-gray-600">
                                            <p>Leo Six</p>
                                            <p>Management</p>
                                        </div>
                                    </div>
                                    <ul class="flex flex-row mt-10 justify-center">
                                        <div class="-mt-10 border-l-2 absolute h-10 border-gray-400"></div>
                                        <li class="relative p-6">
                                            <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                style="left: 50%; right: 0px;"></div>
                                            <div class="relative flex justify-center">
                                                <div class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                </div>
                                                <div class="text-center">
                                                    <div class="flex flex-col justify-center items-center">
                                                        <div class="w-16">
                                                            <img class="block rounded-full m-auto shadow-md"
                                                                alt="Tab Han"
                                                                src="https://randomuser.me/api/portraits/men/46.jpg" />
                                                        </div>
                                                        <div class="text-gray-600">
                                                            <p>Tab Han</p>
                                                            <p>Project Manager</p>
                                                        </div>
                                                    </div>
                                                    <ul class="flex flex-row mt-10 justify-center">
                                                        <div
                                                            class="-mt-10 border-l-2 absolute h-10 border-gray-400">
                                                        </div>
                                                        <li class="relative p-6">
                                                            <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                                style="left: 50%; right: 0px;"></div>
                                                            <div class="relative flex justify-center">
                                                                <div
                                                                    class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="flex flex-col justify-center items-center">
                                                                        <div class="w-16">
                                                                            <img class="block rounded-full m-auto shadow-md"
                                                                                alt="Daniel Zhou"
                                                                                src="https://randomuser.me/api/portraits/men/76.jpg" />
                                                                        </div>
                                                                        <div class="text-gray-600">
                                                                            <p>Daniel Zhou</p>
                                                                            <p>Team Lead</p>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="flex flex-row mt-10 justify-center">
                                                                        <div
                                                                            class="-mt-10 border-l-2 absolute h-10 border-gray-400">
                                                                        </div>
                                                                        <li class="relative p-6">
                                                                            <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                                                style="left: 50%; right: 0px;">
                                                                            </div>
                                                                            <div
                                                                                class="relative flex justify-center">
                                                                                <div
                                                                                    class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    <div
                                                                                        class="flex flex-col justify-center items-center">
                                                                                        <div class="w-16">
                                                                                            <img class="block rounded-full m-auto shadow-md"
                                                                                                alt="Patrick Wang"
                                                                                                src="https://randomuser.me/api/portraits/men/55.jpg" />
                                                                                        </div>
                                                                                        <div class="text-gray-600">
                                                                                            <p>Patrick Wang</p>
                                                                                            <p>Developer</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="relative p-6">
                                                                            <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                                                style="left: 0px; right: 50%;">
                                                                            </div>
                                                                            <div
                                                                                class="relative flex justify-center">
                                                                                <div
                                                                                    class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    <div
                                                                                        class="flex flex-col justify-center items-center">
                                                                                        <div class="w-16">
                                                                                            <img class="block rounded-full m-auto shadow-md"
                                                                                                alt="Jonsen Li"
                                                                                                src="https://randomuser.me/api/portraits/men/41.jpg" />
                                                                                        </div>
                                                                                        <div class="text-gray-600">
                                                                                            <p>Jonsen Li</p>
                                                                                            <p>Developer</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="relative p-6">
                                                            <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                                style="left: 0px; right: 0px;"></div>
                                                            <div class="relative flex justify-center">
                                                                <div
                                                                    class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="flex flex-col justify-center items-center">
                                                                        <div class="w-16">
                                                                            <img class="block rounded-full m-auto shadow-md"
                                                                                alt="Derek Hu"
                                                                                src="https://randomuser.me/api/portraits/men/44.jpg" />
                                                                        </div>
                                                                        <div class="text-gray-600">
                                                                            <p>Derek Hu</p>
                                                                            <p>Team Lead</p>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="flex flex-row mt-10 justify-center">
                                                                        <div
                                                                            class="-mt-10 border-l-2 absolute h-10 border-gray-400">
                                                                        </div>
                                                                        <li class="relative p-6">
                                                                            <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                                                style="left: 50%; right: 50%;">
                                                                            </div>
                                                                            <div
                                                                                class="relative flex justify-center">
                                                                                <div
                                                                                    class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    <div
                                                                                        class="flex flex-col justify-center items-center">
                                                                                        <div class="w-16">
                                                                                            <img class="block rounded-full m-auto shadow-md"
                                                                                                alt="Alfie Zu"
                                                                                                src="https://randomuser.me/api/portraits/men/25.jpg" />
                                                                                        </div>
                                                                                        <div class="text-gray-600">
                                                                                            <p>Alfie Zu</p>
                                                                                            <p>Developer</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="relative p-6">
                                                            <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                                style="left: 0px; right: 50%;"></div>
                                                            <div class="relative flex justify-center">
                                                                <div
                                                                    class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="flex flex-col justify-center items-center">
                                                                        <div class="w-16">
                                                                            <img class="block rounded-full m-auto shadow-md"
                                                                                alt="Lennis Chan"
                                                                                src="https://randomuser.me/api/portraits/men/30.jpg" />
                                                                        </div>
                                                                        <div class="text-gray-600">
                                                                            <p>Lennis Chan</p>
                                                                            <p>Team Lead</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="relative p-6">
                                            <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                style="left: 0px; right: 50%;"></div>
                                            <div class="relative flex justify-center">
                                                <div class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                </div>
                                                <div class="text-center">
                                                    <div class="flex flex-col justify-center items-center">
                                                        <div class="w-16">
                                                            <img class="block rounded-full m-auto shadow-md"
                                                                alt="Peter Miao"
                                                                src="https://randomuser.me/api/portraits/men/54.jpg" />
                                                        </div>
                                                        <div class="text-gray-600">
                                                            <p>Peter Miao</p>
                                                            <p>Project Manager</p>
                                                        </div>
                                                    </div>
                                                    <ul class="flex flex-row mt-10 justify-center">
                                                        <div
                                                            class="-mt-10 border-l-2 absolute h-10 border-gray-400">
                                                        </div>
                                                        <li class="relative p-6">
                                                            <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                                style="left: 50%; right: 50%;"></div>
                                                            <div class="relative flex justify-center">
                                                                <div
                                                                    class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                                </div>
                                                                <div class="text-center">
                                                                    <div
                                                                        class="flex flex-col justify-center items-center">
                                                                        <div class="w-16">
                                                                            <img class="block rounded-full m-auto shadow-md"
                                                                                alt="Peter Ming"
                                                                                src="https://randomuser.me/api/portraits/men/90.jpg" />
                                                                        </div>
                                                                        <div class="text-gray-600">
                                                                            <p>Peter Ming</p>
                                                                            <p>Team Lead</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="relative p-6">
                            <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                style="left: 0px; right: 0px;"></div>
                            <div class="relative flex justify-center">
                                <div class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0"></div>
                                <div class="text-center">
                                    <div class="flex flex-col justify-center items-center">
                                        <div class="w-16">
                                            <img class="block rounded-full m-auto shadow-md" alt="Shi Ten"
                                                src="https://randomuser.me/api/portraits/men/43.jpg" />
                                        </div>
                                        <div class="text-gray-600">
                                            <p>Shi Ten</p>
                                            <p>HR</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="relative p-6">
                            <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                style="left: 0px; right: 50%;"></div>
                            <div class="relative flex justify-center">
                                <div class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0"></div>
                                <div class="text-center">
                                    <div class="flex flex-col justify-center items-center">
                                        <div class="w-16">
                                            <img class="block rounded-full m-auto shadow-md" alt="Shawn Mong"
                                                src="https://randomuser.me/api/portraits/men/97.jpg" />
                                        </div>
                                        <div class="text-gray-600">
                                            <p>Shawn Mong</p>
                                            <p>admin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul> --}}
                    {{-- @endif
                @endforeach --}}
            </div>    
            @endisset
            
        </div>
    </div>
    
</div>
