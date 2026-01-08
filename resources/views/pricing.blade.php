<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @extends('layout.app')


    @section('content')
        <x-PageHero title="প্যাকেজসমূহঃ" />
        
        <!-- pricing start -->

        <x-pricingGrid />

        <!-- pricing end -->


        <!-- bio data feature  start-->
        <div class="bg-teal-50 py-5 pb-20">
            <div class="max-w-6xl mx-auto px-4">
                <h2 class="py-5 text-center text-xl md:text-3xl  text-teal-800">বায়োডাটা ফিচার করতেঃ</h2>
                <div class="flex justify-center items-center mt-5">
                    <div>
                        <div class="flex gap-2">
                            <i class="material-icons">label_outline</i>
                            <p class="text-gray-700">ফিচার করতে চাইলে বায়োডাটা অবশ্যই পাবলিশ থাকতে হবে। পাবলিশ থাকা অবস্থায়
                                আবার পাবলিশ করতে গেলেই ফিচারের অপশন পাওয়া যাবে। ওয়েব ফিচারে ১০০ টাকায় ৩ দিন ফিচার করা হয়।
                                ফেসবুক ফিচারে ১৫০ টাকায় ফেসবুক পোস্ট করা হয়। ফেসবুক ও ওয়েব ফিচার একত্রে করতে চাইলে ২০০ টাকা
                                পেমেন্ট করতে হয়। সিরিয়াল মোতাবেক ফেসবুক ও ওয়েব সাইটে ফিচার করা হয়।</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bio data feature  end-->

    @endsection

</body>

</html>