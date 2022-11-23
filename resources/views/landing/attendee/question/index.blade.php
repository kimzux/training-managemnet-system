<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@100;700&family=Montserrat:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/form.css">
    <title>fanisiprogram-Training-site</title>
</head>

<body>
@include('sweetalert::alert')
    <section class="form">
        <form action="{{route('question.store')}}" class="register-form" method="post">
            <div class="form-header">
                <div class="color-orange"></div>
                <div class="content">
                    <h2 class="form-h1">FANISI PROGRAM</h2>
                    <span class="content1">"We nurture the growth of mid-level professionals and entrepreneurs”</span>
                    <span class="content2">
                        Our program offers leadership development skills tailored for mid-managers.
                        This highly-program focuses on the development of personal and group
                        leadership skills and knowledge relevant to successful career growth.
                    </span>
                </div>
                <hr>
            </div>

            <div class="form-group">
                <div class="form-field">
                @error('name')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    <label for="name" class="label">Name<span class="star">*</span></label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp"
                        placeholder="Your answer" name="name" required>
                </div>

                <div class="form-field">
                @error('company')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    <label for="company" class="label">Company<span class="star">*</span></label>
                    <input type="text" class="form-control" id="exampleInputcompany" aria-describedby="companyHelp"
                        placeholder="Your answer" name="company" required>
                </div>
                <div class="form-field">
                @error('trainer_name')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    <label for="company" class="label">Trainer name<span class="star">*</span></label>
                    <input type="text" class="form-control" id="exampleInputcompany" aria-describedby="companyHelp"
                        placeholder="Your answer" name="trainer_name" required>
                </div>
                <div class="form-field">
                @error('question')
                      <small class="text-danger">{{$message}}</small>
                      @enderror
                    <label for="company" class="label">questions
                        <span class="star">*</span></label>
                    <textarea class="form-control" id="exampleInputcompany" aria-describedby="companyHelp"
                        placeholder="Your answer" name="question" required></textarea>
                </div>
            </div>
            <div class="btn-submit">
                <button type="submit" name="submit" class="btn btn-primary" autocomplete="off">Submit</button>
            </div>
            @csrf
        </form>
    </section>
    <script src="/assets/form.js"></script>
</body>

</html>