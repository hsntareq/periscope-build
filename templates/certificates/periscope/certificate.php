<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Periscope Certificate Title</title>
        <style type="text/css"><?php $this->pdf_style(); ?></style>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="certificate-wrap">
            <div class="certificate-content">
                <?php
                    $hour_text = '';
                    $min_text  = '';
                    $endorsements        = get_post_meta( $course->ID, '_tp_endorsements', true );
                    $learning_objectives = get_post_meta( $course->ID, '_tp_learning_objectives', true );
                    $license_number      = get_user_meta( $user->ID, '_tutor_periscope_license_number', true );


                    if ( $durationHours ) {
                        $hour_text = $durationHours . ' ';
                        $hour_text .= ( $durationHours > 1 ) ? __( 'hours', 'tutor-periscope' ) : __( 'hour', 'tutor-periscope' );
                    }

                    if ( $durationMinutes ) {
                        $min_text = $durationMinutes . ' ';
                        $min_text .= ( $durationMinutes > 1 ) ? __( 'minutes', 'tutor-periscope' ) : __( 'minute', 'tutor-periscope' );
                    }
                    $duration_text = $hour_text . ' ' . $min_text;
                ?>
               <section class="certificate-header">
                    <header class="certificate-logo">
                        <img src="<?php echo esc_url( TUTOR_PERISCOPE_DIR_URL . 'assets/images/periscope-logo.png' ); ?>" alt="Periscope Logo" />
                    </header>
               </section>
               <section class="certificate-details">
                   <h1 class="certificate-title">Certificate of Course Completion</h1>
                   <p><strong>Course:</strong> <span class="course-info"><?php esc_html_e( $course->post_title ); ?></span></p>
                   <p><strong>Student:</strong> <span class="course-info"><?php esc_html_e( $user->display_name ); ?></span></p>
                   <p><strong>Start Date:</strong> <span class="course-info">05/23/20</span></p>
                   <p><strong>Completion Date:</strong> <span class="course-info"><?php esc_html_e( $completed_date ); ?></span></p>
               </section>
               <?php if ( ! empty( $learning_objectives ) ) : ?>
               <section class="learning-objectives">
                   <h3>Learning Objectives and Goals:</h3>
                   <?php echo $learning_objectives; ?>
               </section>
               <?php endif; ?>
               <?php if ( ! empty( $endorsements ) ) : ?>
               <section class="instructors endorsements">
                   <h3>Endorsements:</h3>
                   <p><?php echo $endorsements; ?></p>
               </section>
               <?php endif; ?>
               <section class="instructors">
                   <h3>Instructors:</h3>
                   <p><?php esc_html_e( $instructor_name ); ?></p>
               </section>
               <section class="medbridge">
                   <h3>MedBridge:</h3>
                    <p class="medbridge-info">Andrew Mickus, <em>Director of Course Development</em></p>
                    <p class="medbridge-info">1633 Westlake Avenue North, Suite 200, Seattle, WA 98109</p>
                    <p class="medbridge-info contact"><span class="phone"><img class="phone-icon" src="<?php echo esc_url( TUTOR_PERISCOPE_DIR_URL . 'assets/images/phone.png' ); ?>" /> (206) 216-5003 </span> <span class="email"> <img class="email-icon" src="<?php echo esc_url( TUTOR_PERISCOPE_DIR_URL . 'assets/images/email.png' ); ?>" /> <a href="mailto:support@medbridgeed.com">support@medbridgeed.com</a></span></p>
               </section>
               <section class="licensor-info">
                   <img src="<?php echo esc_url( $signature_image_url ); ?>" height=30 alt="signature" />
                   <h3>Physical Therapist Licensed In Virginia</h3>
                    <p><strong>Contact Hours:</strong> <span class="therapist-info"><?php esc_html_e( $duration_text ); ?></span></p>
                    <p><strong>License:</strong> <span class="therapist-info"><?php esc_html_e( $license_number ); ?></span></p>
                    <p><strong>State:</strong> <span class="therapist-info">Virginia</span></p>
                    <p><strong>Statement:</strong> <span class="therapist-info">The regulating agency in your state has indicated that they will accept continuing education courses approved by organizations
                        such as another state's APTA chapter. This course is approved by the Texas Physical Therapy Association (APS #: 2008024TX) and is valid
                        for Type 1 Continuing Competency credit in Virginia.</span></p>
               </section>
               <section class="certificate-footer">
                   <div class="leftside-content">
                        <p>MedBridge Certificate of Completion </p>
                   </div>
                   <div class="rightside-content">
                      
                   </div>
               </section>
            </div>
        </div>
        <div id="watermark">
        </div>
    </body>
</html>