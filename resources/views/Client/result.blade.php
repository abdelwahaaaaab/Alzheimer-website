<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <title>Upload MRI</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
        }
        
        body {
            background-image: url("https://www.ibelieveinsci.com/wp-content/uploads/scientist-exploring-human-brain_Web-824x549-1.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
            width: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
        }
        
        .clear_fix {
            clear: both;
        }
        /*start navbar */
        
        .navbar {
            width: 100%;
            height: 90px;
            position: fixed;
            background-color: #8199e8;
            border-radius: 0 0 100px 100px;
            box-shadow: 4px 4px 7px black;
        }
        
        .navbar .container .image img {
            float: left;
            padding-top: 15px;
            margin-left: 0px
        }
        
        .navbar .container .icon ul {
            list-style: none;
        }
        
        .navbar .container .icon ul li {
            float: left;
            padding: 30px;
            margin-left: 0px;
        }
        
        .navbar .container .icon ul li a {
            color: #fff;
            text-decoration: none;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            font-size: 21px;
        }
        
        .navbar .container .icon ul li a:hover {
            color: black;
        }
        .registerbtn2
        {
            border-radius:40px;
            background-color:#8199e8;
            padding:5px 10px;
            font-size:21px;
            font-weight:bold;
        }
        .registerbtn2:hover
        {
            color:white;
            cursor:pointer;
        }
        .submit2
        {
            font-size: 24px;
            border-radius:40px;
            background-color:#8199e8;
            font-weight: bold;
            padding:5px 10px;
        }
        .submit2 a
        {
            text-decoration: none;
            border-radius:40px;
            background-color:#8199e8;
            padding:5px 10px;
            font-size:21px;
            font-weight:bold;
            
        }
        .submit2 a:hover
        {
            color: white;
            cursor: pointer;
        }
        .logout
        {
            background: none;
            border: none;
            color: white;
            font-size: 21px;
            font-weight: bold;  
        }
        .logout:hover
        {
            cursor: pointer;
            color: black;
        }
        /*end navbar*/
    </style>
</head>

<body>
    <!-- start header -->
    <div class="navbar">
        <div class="container">
            <div class="icon" style="padding-left:20px">
                <ul>
                    @if(session('locale') == 'ar')
                    <li><button class="registerbtn2"><a href="{{route('lang','en')}}" style="font-size: 18px">English</a></button></li>
                    <li><button class="registerbtn2"><a href="{{route('lang','ar')}}" style="font-size: 18px">اللغة العربية</a></button></li> 
                    <li><form action="{{route('logout.destroy', session('user_id'))}}" method="POST">
                     @csrf
                     @method('delete')
                        <input type="submit" value="{{__('myCustom.logout-btn')}}"  class="logout">
                    </form></li>
                    <li><a href="/contact"> {{__('myCustom.contact')}} </a></li>
                    <li><a href="/mri"> {{__('myCustom.mri')}}</a></li>
                    <li><a href="/memory-test"> {{__('myCustom.memory')}}</a></li>
                    <li><a href="/instruction"> {{__('myCustom.instruction')}}</a></li>
                    <li><a href="/"> {{__('myCustom.alzheimer')}} </a></li>
                    <li><a href="/home">{{__('myCustom.home')}} </a></li>
                    @else
                    <li><a href="/home">{{__('myCustom.home')}} </a></li>
                    <li><a href="/"> {{__('myCustom.alzheimer')}} </a></li>
                    <li><a href="/instruction"> {{__('myCustom.instruction')}}</a></li>
                    <li><a href="/mri"> {{__('myCustom.mri')}}</a></li>
                    <li><a href="/memory-test"> {{__('myCustom.memory')}}</a></li>
                    <li><a href="/contact"> {{__('myCustom.contact')}} </a></li>
                    <li><form action="{{route('logout.destroy', session('user_id'))}}" method="POST">
                     @csrf
                     @method('delete')
                        <input type="submit" value="{{__('myCustom.logout-btn')}}"  class="logout">
                    </form></li>
                    <li><button class="registerbtn2"><a href="{{route('lang','en')}}" style="font-size: 18px">English</a></button></li>
                    <li><button class="registerbtn2"><a href="{{route('lang','ar')}}" style="font-size: 18px">اللغة العربية</a></button></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <!--end header-->


    @if(session('locale') == 'ar')
    <div class="for" style="padding-bottom: 0px; padding-left:0px; direction: rtl; padding-right: 50px">
    @else
    <div class="for" style="padding-bottom: 0px; padding-left:0px">
    @endif
        
        <h2 style="padding-top: 140px; padding-left: 45px;font-size: 50px; color: #1b2c5c "> {{__('myCustom.result')}} </h2><br>
        @if(session('mri') == 'Mild Demented') 
        <p style="font-size: 30px; padding-left: 10px; color:white;border: 4px solid  #1b2c5c;width: 280px;  height:50px;padding:10px;margin-left:47px;background-color:#1b2c5c ">{{__('myCustom.mild_demented')}}</p>
        @endif
        @if(session('mri') == 'Moderate Demented') 
        <p style="font-size: 30px; padding-left: 10px; color:white;border: 4px solid  #1b2c5c;width: 280px;  height:50px;padding:10px;margin-left:47px;background-color:#1b2c5c ">{{__('myCustom.moderate_demented')}}</p>
        @endif
        @if(session('mri') == 'Non Demented') 
        <p style="font-size: 30px; padding-left: 10px; color:white;border: 4px solid  #1b2c5c;width: 280px;  height:50px;padding:10px;margin-left:47px;background-color:#1b2c5c ">{{__('myCustom.non_demented')}}</p>
        @endif
        @if(session('mri') == 'Very Mild Demented') 
        <p style="font-size: 30px; padding-left: 10px; color:white;border: 4px solid  #1b2c5c;width: 280px;  height:50px;padding:10px;margin-left:47px;background-color:#1b2c5c ">{{__('myCustom.very_mild_demented')}}</p>
        @endif
    </div>
    <br><br><br>
    <div class="for" style="padding-bottom: 0px; padding-left:0px;">
        <h2> </h2>
        @if(session('mri') == 'Mild Demented')
        @if(session('locale') == 'en') 
        <p style="font-size: 18.5px;padding-left: 10px; color:white;border: 4px solid  #1b2c5c;width: 570px;  padding:10px;margin-left:450px;background-color:#1b2c5c;text-align: justify ">In mild stage we can give you some advice to help control the disease <br><br> Establish a Routine: Maintain a regular schedule to provide structure and familiarity. Routines help reduce confusion and provide a sense of security. <br><br> Simplify the Environment: Minimize clutter and distractions in the living environment. Clear pathways, label drawers and cabinets, and use visual cues to aid memory. <br><br> Maintain Social Connections: Encourage regular social interactions with family, friends, and support groups. Social engagement can help reduce feelings of isolation and promote mental stimulation. <br><br> Provide Cognitive Stimulation: Engage in activities that challenge the mind, such as puzzles, reading, listening to music, or learning new skills. These activities can help maintain cognitive abilities and promote mental well-being. <br><br> Ensure Physical Exercise: Encourage regular physical exercise, as it has been shown to benefit brain health. Choose activities suitable for their abilities, such as walking, swimming, or gentle stretching exercises. <br><br> Support Medication Management: Help the individual stay on top of their medication schedule by organizing pillboxes, setting reminders, or using smartphone apps specifically designed for medication management. <br><br> Simplify Communication: Use clear and simple language when communicating with the individual. Speak slowly, provide one-step instructions, and allow them ample time to process and respond. <br><br> Ensure Safety: Assess the living environment for potential hazards, such as loose rugs or slippery surfaces. Install safety measures like handrails, grab bars, and adequate lighting to reduce the risk of accidents. <br><br> Encourage Healthy Eating: Promote a balanced diet with plenty of fruits, vegetables, whole grains, and lean proteins. Ensure they stay hydrated and consider involving a nutritionist or dietician if necessary. <br><br> Practice Self-Care: Caregivers should prioritize their own well-being. Seek support from family, friends, or support groups, and consider respite care options to ensure you have time for self-care and relaxation. <br><br> Remember that each person with Alzheimer's is unique, and it's important to tailor the advice to their individual needs and preferences. Consulting with healthcare professionals or Alzheimer's organizations can provide more specific guidance based on the person's condition and stage of the disease. <br><br></p>
        @else
        <p style="font-size: 18.5px;padding-left: 10px; direction:rtl; color:white;border: 4px solid  #1b2c5c;width: 570px;  padding:10px;margin-left:450px;background-color:#1b2c5c;text-align: justify ">في المراحل المبكرة للمرض يمكنك الاستعانة بهذه التعليمات: 
قم بإنشاء جدول زمني ثابت: حافظ على جدول زمني منتظم لتوفير الهيكل والتعرف. تساعد الروتينات في تقليل الارتباك وتوفير الأمان <br><br> قم بتبسيط البيئة: قم بتقليل الفوضى والملهيات في البيئة المعيشية. قم بتنظيف الممرات ووضع تصنيفات على الأدراج والخزائن واستخدم مؤشرات بصرية للمساعدة في الذاكرة <br><br> حافظ على الروابط الاجتماعية: شجع على التفاعل الاجتماعي المنتظم مع الأسرة والأصدقاء ومجموعات الدعم. يمكن أن يساعد التواصل الاجتماعي في تقليل الشعور بالعزلة وتعزيز التحفيز العقلي <br><br> قدم التحفيز العقلي: قم بإشراك الشخص في أنشطة تحفّز العقل والتي تناسب قدراته، مثل حل الألغاز والقراءة والاستماع إلى الموسيقى أو تعلم مهارات جديدة. يمكن أن تساعد هذه الأنشطة في الحفاظ على القدرات العقلية وتعزيز الرفاهية العقلية <br><br> ضمان ممارسة النشاط البدني: شجّع على ممارسة النشاط البدني المنتظم، حيث أظهرت الدراسات أنه يفيد صحة الدماغ. اختر الأنشطة المناسبة لقدراتهم، مثل المشي، والسباحة، وتمارين التمدد اللطيفة <br><br> دعم إدارة الأدوية: ساعد الشخص على الالتزام بجدول الأدوية الخاص بهم من خلال تنظيم صناديق الحبوب ووضع تنبيهات أو استخدام تطبيقات الهواتف الذكية المصممة خصيصًا لإدارة الأدوية <br><br> تبسيط التواصل: استخدم لغة واضحة وبسيطة عند التواصل مع الشخص. تحدث ببطء وقدم تعليمات تتضمن خطوة واحدة وامنحهم وقتًا كافيًا لمعالجة المعلومات والرد <br><br> ضمان السلامة: قم بتقييم البيئة المعيشية من أجل المخاطر المحتملة، مثل السجاد الفوضوي أو الأسطح الزلقة. قم بتركيب إجراءات السلامة مثل الحواجز الجانبية ومقابض الدعم وإضاءة كافية لتقليل خطر الحوادث <br><br> تشجيع الأكل الصحي: دعم نظام غذائي متوازن يشمل الفواكه والخضروات والحبوب الكاملة والبروتينات النباتية والدهنية الصحية. تأكد من شرب كمية كافية من الماء واستشر أخصائي تغذية إذا لزم الأمر <br><br> ممارسة الرعاية الذاتية: يجب على المقدمين الرعاية أن يعتبروا رعاية أنفسهم من أولوياتهم. ابحث عن الدعم من الأسرة والأصدقاء أو مجموعات الدعم، ونظرًا للراحة والاسترخاء، قد يكون من المناسب النظر في خيارات الرعاية المؤقتة <br></p>
        @endif
        @endif
        @if(session('mri') == 'Moderate Demented') 
        @if(session('locale') == 'ar')
        <p style="font-size: 18.5px;padding-left: 10px; color:white;border: 4px solid  #1b2c5c;width: 570px;  padding:10px;margin-left:450px;background-color:#1b2c5c;text-align: justify; direction:rtl; ">في المراحل المتوسطة او المتدهورة قليلا من مرض الزهايمر يحتاج الشخص إلى دعم إضافي ورعاية مكثفة. إليك بعض النصائح لمساعدتك في التعامل مع تلك المراحل <br><br> الحفاظ على السلامة: قم بتقديم بيئة آمنة للشخص المصاب بالزهايمر. احرص على إزالة أي مصادر محتملة للإصابة، مثل الأدوات الحادة أو المواد الكيميائية الخطرة. قد تحتاج إلى استخدام أقفال للأدراج والخزائن لتجنب حدوث حوادث غير مقصودة <br><br> توفير رعاية مكثفة: قد تحتاج إلى توفير رعاية مكثفة للشخص في هذه المرحلة. قد تكون هناك حاجة إلى مرافقة دائمة أو النظر في خيارات الرعاية المؤقتة أو المنزلية <br><br> التواصل البسيط والمباشر: استخدم لغة بسيطة وواضحة عند التواصل مع الشخص. حاول استخدام الصور أو الإيماءات للمساعدة في التواصل وتقديم التعليمات <br><br> إدارة الوقت والجدولة: قم بتنظيم يوم الشخص بشكل جيد وقم بتحديد أوقات محددة للأنشطة اليومية. هذا يساعد على توفير بيئة مألوفة ومنظمة <br><br> تعزيز التحفيز العقلي: حاول تشجيع الشخص على المشاركة في أنشطة تحفز العقل وتعزز التفاعل الاجتماعي. يمكن أن تشمل ذلك حل الألغاز، واللعب بألعاب الذاكرة، والاستماع إلى الموسيقى، ومشاهدة الأفلام التي تحبها <br><br> الاستفادة من الدعم العائلي والاجتماعي: طلب المساعدة من أفراد العائلة والأصدقاء المقربين في الرعاية والدعم. قد تكون هناك أيضًا مجموعات دعم محلية لمقدمي الرعاية حيث يمكنكم تبادل الخبرات والمشورة <br><br> الراحة والاسترخاء: اهتم براحة الشخص والسماح له بالاسترخاء وقضاء وقت مريح. يمكن أن تكون الموسيقى المهدئة أو النشاطات المريحة مفيدة في تعزيز الراحة والهدوء <br><br> مراجعة الرعاية الصحية: حافظ على روابط جيدة مع الفريق الطبي واطلب الدعم والمشورة عند الحاجة. قد يتطلب الأمر ضبط الأدوية أو تعديل الخطة العلاجية بمرور الوقت <br><br> يجب عليك أيضًا أن تهتم بنفسك وتطلب الدعم اللازم للتعامل مع الرعاية المكثفة للشخص المصاب بالزهايمر. ابحث عن مجموعات الدعم المحلية والمصادر الداعمة للمقدمين الرعاية للحصول على المساعدة والتوجيه في هذا الصدد <br></p>
        @else
        <p style="font-size: 18.5px;padding-left: 10px; color:white;border: 4px solid  #1b2c5c;width: 570px;  padding:10px;margin-left:450px;background-color:#1b2c5c;text-align: justify ">For moderat stage in Alzheimer disease you need to take care carefully for your self here is some things you can do: <br><br> Safety first: Is there an immediate safety risk for the person with dementia to perform this task alone? If there is no immediate risk of injury or harm, provide encouragement and continue to provide supervision as necessary. <br><br> Avoid stress: Prioritize tasks or actions that do not cause unnecessary stress for the person with dementia. For example, if you know that grocery shopping will be frustrating for the person with dementia, ask for their participation to outline a weekly menu and organize a grocery list. <br><br> Work better together: Find activities to do together and keep the conversation going about expectations for how you will provide support. Check in regularly by asking the person with dementia if you are providing a level of assistance that is comfortable or adequate. <br><br> Create a help signal: Identify a cue or phrase that you can use to confirm if the person with dementia is comfortable receiving support. For example, you may agree to use a phrase like, “Is there anything I can do to help?” or a nod to signal that it’s ok to chime in if the person with dementia is having difficulty remembering a word or name. <br></p>
        @endif
        @endif
        @if(session('mri') == 'Non Demented')
        @if(session('locale') == 'ar')
        <p style="font-size: 18.5px;padding-left: 10px; color:white;border: 4px solid  #1b2c5c;width: 570px;  padding:10px;margin-left:450px;background-color:#1b2c5c;text-align: justify; direction:rtl; ">من خلال فحص الاشعة لم يتبين تأثر الدماغ بالمرض لذا إليك بعض النصائح للوقاية من المرض:
اعتنِ بصحتك العامة: حافظ على نمط حياة صحي يشمل النظام الغذائي الصحي وممارسة النشاط البدني بانتظام. تناول الأطعمة الغنية بالمواد المغذية، مثل الفواكه والخضروات والأطعمة ذات الدهون الصحية والبروتينات. كما يوصى بممارسة النشاط البدني المنتظم، مثل المشي والسباحة ورياضة القوة، وذلك لتعزيز الدورة الدموية وصحة الدماغ <br><br> احافظ على نشاط عقلي منتظم: قم بتحفيز العقل بانتظام من خلال ممارسة الألغاز والأنشطة التي تعزز التفكير والتذكر. قد تشمل هذه الأنشطة حل الألغاز المعقدة، وحفظ القصائد، وحضور الدروس التعليمية، وممارسة ألعاب الذاكرة <br><br> احرص على الاجتماع الاجتماعي: تفاعل مع الآخرين وحافظ على شبكة دعم اجتماعي قوية. الاجتماع مع الأصدقاء والعائلة والمشاركة في الأنشطة الاجتماعية يمكن أن يعزز صحة الدماغ ويقلل من خطر الإصابة بالزهايمر <br><br> قم بتنظيم الأنشطة اليومية: استخدم تقنيات التنظيم والتخطيط لتنظيم يومك. قم بإنشاء قوائم المهام واستخدام التذكيرات والتقويمات للمساعدة في تنظيم الأنشطة اليومية والمواعيد المهمة <br><br> استمر في التعلم: حافظ على رغبتك في التعلم واكتساب المعرفة الجديدة. استكشف مواضيع جديدة، واقرأ الكتب، وقم بالتعلم المستمر. هذا يمكن أن يحفز العقل ويساهم في صحة الدماغ <br><br> احمِ بشكل جيد من الأمراض المزمنة: قم بإدارة الحالات المزمنة مثل ارتفاع ضغط الدم والسكري بشكل صحيح. تترافق هذه الحالات المزمنة بزيادة خطر الإصابة بالزهايمر، لذا يجب على الشخص أن يتبع النصائح الطبية ويتلقى العلاج اللازم <br><br> احمِ بشكل جيد من الصدمات الرأسية: يجب تجنب الصدمات الرأسية واتخاذ التدابير الوقائية لتقليل خطر الإصابة بالدماغ. يشمل ذلك ارتداء خوذة عند ممارسة الرياضات الخطرة وتجنب المواقف المحتملة للسقوط والإصابة بالإصابات الرأسية <br><br> ذكر أنه لا يوجد ضمان مؤكد لمنع مرض الزهايمر بالكامل، ولكن اتباع هذه النصائح الصحية قد تساعد في تقليل خطر الإصابة بالمرض وتحسين صحة الدماغ <br></p>
        @else
        <p style="font-size: 18.5px;padding-left: 10px; color:white;border: 4px solid  #1b2c5c;width: 570px;  padding:10px;margin-left:450px;background-color:#1b2c5c;text-align: justify ">If you want to protect yourself from the disease or delay the onset of symptoms in the long run, you can follow the following instructions: <br><br> adopting a healthy lifestyle and making certain lifestyle choices may help reduce the risk or delay the onset of the disease. Here are some recommendations: <br><br> Stay Physically Active: Engage in regular physical exercise, such as brisk walking, jogging, swimming, or dancing. Aim for at least 150 minutes of moderate-intensity exercise per week. <br><br> Follow a Healthy Diet: Adopt a balanced diet that includes plenty of fruits, vegetables, whole grains, lean proteins (such as fish, poultry, and legumes), and healthy fats (found in nuts, olive oil, and avocados). Reduce the consumption of processed foods, sugary snacks, and saturated fats. <br><br> Engage in Mental Stimulation: Keep your brain active by engaging in intellectually stimulating activities. Read books, solve puzzles, play strategic games, learn new skills, or engage in hobbies that require mental effort. <br><br> Maintain Social Connections: Stay socially engaged and maintain meaningful relationships. Regularly interact with family, friends, and participate in community activities or social groups. <br><br> Manage Chronic Conditions: Control and manage chronic conditions like diabetes, hypertension, obesity, and high cholesterol. These conditions have been linked to an increased risk of Alzheimer's disease, so it's important to work with healthcare professionals to keep them under control. <br><br> Get Quality Sleep: Prioritize getting sufficient sleep on a regular basis. Aim for 7-8 hours of quality sleep each night to support overall brain health. <br><br> Manage Stress: Chronic stress can have negative effects on brain health. Practice stress management techniques such as meditation, deep breathing exercises, yoga, or engaging in activities you enjoy to help reduce stress levels. <br><br> Protect Your Head: Take precautions to prevent head injuries, as there is evidence linking severe head trauma to an increased risk of Alzheimer's disease. Wear seat belts, use helmets during sports activities, and take appropriate safety measures. <br><br> 
Limit Alcohol Consumption: Excessive alcohol consumption can increase the risk of cognitive decline. If you choose to drink, do so in moderation, which means up to one drink per day for women and up to two drinks per day for men. <br><br> Stay mentally and emotionally healthy: Pay attention to your mental and emotional well-being. Seek help and support if you experience symptoms of depression, anxiety, or chronic stress. <br></p>
        @endif
        @endif
        @if(session('mri') == 'Very Mild Demented')
        @if(session('locale') == 'ar') 
        <p style="font-size: 18.5px;padding-left: 10px; color:white;border: 4px solid  #1b2c5c;width: 570px;  padding:10px;margin-left:450px;background-color:#1b2c5c;text-align: justify; direction: rtl; ">في المراحل الخفيفة من مرض الزهايمر، يمكن أن تكون الأعراض غير ملحوظة أو تظهر على فترات زمنية متباعدة. في هذه المرحلة، الهدف الرئيسي هو الحفاظ على الصحة العامة والدعم العقلي والاجتماعي للشخص المصاب بالزهايمر. إليك بعض النصائح لهذه المرحلة <br><br> لمتابعة الطبية الدورية: يجب أن يستمر الشخص المصاب بالزهايمر في رؤية الطبيب بشكل منتظم لتقييم حالته وضبط أي أدوية مطلوبة. يمكن للطبيب توفير المشورة والتوجيه اللازم لإدارة الأعراض وتحسين جودة الحياة <br><br> الحفاظ على نمط حياة صحي: ينصح بالاهتمام بالصحة العامة من خلال ممارسة النشاط البدني المنتظم، وتناول وجبات غذائية متوازنة، والحفاظ على نوم جيد. يمكن أن تساعد العادات الصحية في دعم الصحة العقلية والحفاظ على وظائف الدماغ <br><br> لتحفيز العقلي: استمر في تحفيز العقل من خلال ممارسة أنشطة تحفز الذاكرة والتفكير. قد تشمل ذلك حل الألغاز، وحفظ القصائد، والمشاركة في أنشطة تعزز التحفيز العقلي <br><br> الاستفادة من التقنية: استخدم التكنولوجيا والأجهزة الذكية للمساعدة في الذاكرة والتنظيم الشخصي. يمكن استخدام تطبيقات الهواتف الذكية والأجهزة الإلكترونية لإنشاء قوائم مهام وتذكيرات وتخزين المعلومات المهمة <br><br> التنظيم وإدارة الوقت: استخدم الجداول والقوائم لتنظيم الأنشطة اليومية والمواعيد. قد يساعد ذلك على تقليل الارتباك والنسيان وتحسين الإنتاجية العامة <br><br> الدعم الاجتماعي: حافظ على الاتصال الاجتماعي والتفاعل مع الأصدقاء والعائلة. يمكن للدعم الاجتماعي أن يلعب دورًا مهمًا في تعزيز الصحة العقلية والمشاعر الإيجابية <br><br> الاستمتاع بالهوايات والأنشطة المحببة: قم بممارسة الهوايات والأنشطة التي تجلب السعادة والراحة. قد تشمل ذلك القراءة، والرسم، والحدائق، والموسيقى، والطهي، وأي نشاط يمنح الشخص متعة وترفيه <br><br> تذكر أن كل شخص يعاني من مرض الزهايمر فريد، وقد تختلف الاحتياجات والتحديات من شخص إلى آخر. يمكن للدعم العائلي والمهني والاجتماعي أن يكون ذا أهمية كبيرة في تلك الفترة، لذا لا تتردد في الحصول على المساعدة والدعم عند الحاجة <br></p>
        @else
        <p style="font-size: 18.5px;padding-left: 10px; color:white;border: 4px solid  #1b2c5c;width: 570px;  padding:10px;margin-left:450px;background-color:#1b2c5c;text-align: justify ">In very mild stage, the symptoms may not appear or happen in spaced periods here is some advice you can follow, <br><br> Encourage Independence: Support the individual in continuing to perform activities of daily living independently, as long as they are able to do so safely. This can help maintain their self-esteem and sense of autonomy. <br><br> Promote Mental Stimulation: Engage the person in mentally stimulating activities that are appropriate for their abilities. This could include reading, solving puzzles, playing memory games, or engaging in hobbies they enjoy. <br><br> Support Memory Aids: Introduce memory aids and strategies to help the individual compensate for any memory difficulties. This can include using calendars, reminder notes, electronic organizers, or smartphone apps to keep track of appointments, tasks, and important information. <br><br> Encourage Social Engagement: Encourage the person to participate in social activities, such as joining clubs, attending community events, or volunteering. Social interaction can provide cognitive stimulation and emotional well-being. <br><br> Maintain a Healthy Lifestyle: Emphasize the importance of regular physical exercise, a balanced diet, and sufficient sleep. These lifestyle factors can have a positive impact on overall brain health. <br><br> Involve the Person in Decision-Making: Whenever possible, involve the individual in decision-making processes related to their care and daily life. This can help maintain their sense of control and dignity. <br><br> Monitor Driving Skills: Keep an eye on the person's driving abilities and consider assessing their driving skills with the help of a professional, if necessary. Safety on the road is crucial for both the person with Alzheimer's and others. <br><br> Plan for the Future: While the person is still in the very mild stage, it's advisable to start planning for the future. This includes discussing healthcare preferences, legal matters, and financial arrangements with the person and their family members. <br><br> Remember to regularly consult with healthcare professionals to ensure that the care and support provided align with the person's needs and stage of Alzheimer's disease. <br></p>
        @endif
        @endif
    </div><br><br><br>
    <!--start footer-->
    <div class="end_footer " style="background-color: #8199e8; text-align: center; width: 1519px;height: 100px; margin-top:100px">
        <p style="margin: 0%; color: rgb(255, 255, 255); font-size: large; margin-top: 100px; margin-left: 40px ; padding-top: 5px; ">&copy; {{__('myCustom.copyright')}}
    <br><a style="color: rgb(255, 255, 255); " href="# ">{{__('myCustom.part-one')}}<br>
    {{__('myCustom.part-two')}}</a>
        </p>
    </div>
    <!--end footer-->




</body>

</html>