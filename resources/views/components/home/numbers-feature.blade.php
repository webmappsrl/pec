@props(['target','unit','text'])

<div x-data="{ current: 0, target: {{$target}}, time: 2000}" 
        x-intersect.once="() => {
        start = current; 
        const interval = Math.max(time / (target - start), 5); 
        const step = (target - start) /  (time / interval);  
        const handle = setInterval(() => {
            if(current < target) 
                current += step
            else {
                clearInterval(handle);
                current = target
            }   
            }, interval)
    }">
    <div class="text-6xl text-green-800 font-bold text-right">
        <span x-text="Math.round(current)"></span>
        <span>{{$unit}}</span>
    </div>
    <div class="text-green-800 text-right pt-2 font-bold">
        <p class="font-bold">{{$text}}</p>
    </div>
</div>