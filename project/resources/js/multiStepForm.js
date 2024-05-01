

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('multiStepForm');
        const steps = form.querySelectorAll('.step');
        const prevButton = form.querySelector('.prev');
        const nextButton = form.querySelector('.next');
        let currentStep = 0;

        function showStep(stepIndex) {
            steps.forEach((step, index) => {
                step.style.display = index === stepIndex ? 'block' : 'none';
            });
        }

        function goToNextStep() {
            currentStep++;
            showStep(currentStep);
        }

        function goToPrevStep() {
            currentStep--;
            showStep(currentStep);
        }

        nextButton.addEventListener('click', goToNextStep);
        prevButton.addEventListener('click', goToPrevStep);
    });
</script>
@endsection
