import { Form, Head } from "@inertiajs/react";
import EventController from "@/actions/App/Http/Controllers/EventController";
import { Button } from "@/components/ui/button";
import { MeetupGroup } from "@/types";
import EventForm from "@/components/event-form";

interface Props {
    meetupGroups: MeetupGroup[];
}

export default function EventCreate({ meetupGroups }: Props) {
    return (
        <>
            <Head title="Create Event" />

            <Form
                {...EventController.store.form()}
                className="max-w-xl space-y-6"
            >
                {({ processing, errors }) => (
                    <>
                        <EventForm
                            errors={errors}
                            meetupGroups={meetupGroups}
                        />
                        <Button type="submit" disabled={processing}>
                            {processing ? 'Creating...' : 'Create Event'}
                        </Button>   
                    </>
                )}
            </Form>
        </>
    );
}
