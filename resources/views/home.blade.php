<x-layouts.simple>
    <x-slot name="title">Home</x-slot>

    <!-- Appraisal Form -->
    <main id="appraisal_form" class="w-full h-full min-h-[calc(100vh-61.67px)] relative">
        <x-appraisal.aside step="first" title="Commitment to Professional Practice"
            description="This section evaluates the staff member's commitment to professional excellence, adherence to ethical standards, and dedication to continuous improvement in their role."
            :isVisible="true" bgPosition="37%_top" />
        <x-appraisal.aside step="second" title="Commitment to Professional Behaviour"
            description="This section evaluates the staff member's conduct, ethics, and interpersonal interactions in alignment with the school's values and professional expectations"
            :isVisible="false" bgPosition="50%_top" />
        <x-appraisal.aside step="third" title="Commitment to Mission"
            description="At Adventist schools, staff members play a crucial role in nurturing a Christ-centered learning environment. This section evaluates how effectively staff integrate biblical principles into their professional responsibilities, inspire spiritual growth in students, and contribute to the mission of the school"
            :isVisible="false" bgPosition="37%_top" />
        <section
            class="flex-1 py-10 px-[100px] bg-light w-full max-w-[calc(100%-439px)] ms-auto h-full min-h-[calc(100vh-61.67px)]">
            <form class="pat_form flex flex-col gap-[60px]">
                <x-appraisal.steps-indicator :currentStep="2" :totalSteps="3" />

                <x-appraisal.step-section step="first" :isVisible="true" section="s1">
                    <x-appraisal.question
                        question="1. [Staff Name] demonstrates integrity, fairness, and professionalism in all leadership responsibilities."
                        questionNumber="1.1" section="s1" tooltipContent="A top aligned tooltip." />

                    <x-appraisal.question
                        question="2. [Staff Name]'s scope and sequence, programs and assessment schedule are up to date and compliant with the current NESA Syllabus."
                        questionNumber="1.2" section="s1" tooltipContent="A top aligned tooltip." />

                    <x-appraisal.question
                        question="3. [Staff Name] is always able to meet important professional deadlines (Programs, Reports, Work registers etc)."
                        questionNumber="1.3" section="s1" tooltipContent="A top aligned tooltip." />

                    <x-appraisal.question
                        question="4. [Staff Name] has evidence uploaded in the relevant online space to demonstrate that their programs reflect practice."
                        questionNumber="1.4" section="s1" tooltipContent="A top aligned tooltip." />

                    <x-appraisal.question
                        question="5. [Staff Name] takes care when writing reports to ensure that parents receive specific feedback with a gracious delivery."
                        questionNumber="1.5" section="s1" tooltipContent="A top aligned tooltip." />
                </x-appraisal.step-section>

                <x-appraisal.step-section step="second" :isVisible="false" section="s2">
                    <x-appraisal.question
                        question="1. [Staff Name] demonstrates integrity, fairness, and professionalism in all leadership responsibilities."
                        questionNumber="2.1" section="s2" tooltipContent="A top aligned tooltip." />

                    <x-appraisal.question
                        question="2. [Staff Name] sets a positive example for staff by modelling ethical behaviour, respect, and professionalism."
                        questionNumber="2.2" section="s2" tooltipContent="A top aligned tooltip." />

                    <x-appraisal.question
                        question="3. [Staff Name] handles conflicts and difficult situations with diplomacy, fairness, and constructive problem-solving."
                        questionNumber="2.3" section="s2" tooltipContent="A top aligned tooltip." />

                    <x-appraisal.question
                        question="4. [Staff Name] fosters a culture of mutual respect, open communication, and teamwork among staff members."
                        questionNumber="2.4" section="s2" tooltipContent="A top aligned tooltip." />

                    <x-appraisal.question
                        question="5. [Staff Name] ensures that all staff members feel supported, valued, and heard in their professional roles."
                        questionNumber="2.5" section="s2" tooltipContent="A top aligned tooltip." />
                </x-appraisal.step-section>

                <x-appraisal.step-section step="third" :isVisible="false" section="s3">
                    <x-appraisal.question question="1. [Staff Name] attends worship regularly and is usually on time."
                        questionNumber="3.1" section="s3" tooltipContent="A top aligned tooltip." />

                    <x-appraisal.question
                        question="2. [Staff Name] supports the spiritual direction of the school and can articulate our spiritual masterplan."
                        questionNumber="3.2" section="s3" tooltipContent="A top aligned tooltip." />

                    <x-appraisal.question
                        question="3. [Staff Name] willingly shares with their colleagues when rostered to lead staff worship."
                        questionNumber="3.3" section="s3" tooltipContent="A top aligned tooltip." />

                    <x-appraisal.question
                        question="4. [Staff Name] takes advantage of teachable moments with students for character development."
                        questionNumber="3.4" section="s3" tooltipContent="A top aligned tooltip." />

                    <x-appraisal.question question="5. [Staff Name] takes opportunities to share Jesus with students."
                        questionNumber="3.5" section="s3" tooltipContent="A top aligned tooltip." />
                </x-appraisal.step-section>

                <x-appraisal.step-buttons :showPrev="false" :showNext="true" :showSubmit="false" />
            </form>
        </section>
    </main>

    <!-- Appraisal Summary -->
    <main id="appraisal_summary" class="w-full max-w-[956px] mx-auto bg-white p-12 rounded-2xl my-20">
        <section>
            <h2 class="text-center">Appraisal Summary</h2>
            <p class="text-center mt-5 mb-14">
                Please review your answers below and make any adjustments needed
                before submitting.
            </p>
        </section>

        <section>
            <x-appraisal.tab-buttons />

            <div id="tabContents">
                <x-appraisal.tab-content id="CPP" :isActive="true">
                    <p>This is the content of CPP.</p>
                </x-appraisal.tab-content>
                <x-appraisal.tab-content id="CPB" :isActive="false">
                    <p>This is the content of CPB.</p>
                </x-appraisal.tab-content>
                <x-appraisal.tab-content id="CM" :isActive="false">
                    <p>This is the content of CM.</p>
                </x-appraisal.tab-content>
            </div>
        </section>

        <x-appraisal.summary-buttons />
    </main>

</x-layouts.simple>